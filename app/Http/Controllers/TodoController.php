<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoList::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $test)
    {
        $this->validate($test, TodoList::$rules);
        $form = $test->all();
        TodoList::create($form);
        return redirect('/');
    }

    public function update(Request $test)
    {
        $this->validate($test, TodoList::$rules);
        $form = $test->all();
        unset($form['_token']);
        TodoList::where('id', $test->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $test)
    {
        TodoList::where('id', $test->id)->delete();
        return redirect('/');
    }
}
