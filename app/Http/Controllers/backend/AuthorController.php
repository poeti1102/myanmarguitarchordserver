<?php

namespace App\Http\Controllers\backend;

use App\Models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function list()
    {
        return view('app.authors.index');
    }

    public function getAll()
    {
        return Author::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {
        
    }
}
