<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $max_data = 4;

        if(request('search')){
            $data = Todo::where('task', 'like', '%' . request('search') . '%')->paginate($max_data)->withQueryString();
        }else{
            $data = Todo::orderBy('task', 'asc')->paginate($max_data);
        }
        return view('todo.app', compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required | max:100 | min:3'
        ], [
            'task.required' => 'Task wajib di isi',
            'task.min' => 'Task isinya minimal 3',
            'task.max' => 'Task isinya maksimal 100'
        ]);

        $data = [
            'task' => $request->input('task'),
        ];

        Todo::create($data);
        return redirect()->route('todo')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task' => 'required | max:15 | min:3'
        ], [
            'task.required' => 'Task wajib di isi',
            'task.min' => 'Task isinya minimal 3',
            'task.max' => 'Task isinya maksimal 15'
        ]);

        $data = [
            'task' => $request->input('task'),
            'completed' => $request->input('completed')
        ];

        Todo::where('id', $id)->update($data);
        return redirect()->route('todo')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id', $id)->delete();
        return redirect()->route('todo')->with('success', 'data berhasil dihapus');
    }
}
