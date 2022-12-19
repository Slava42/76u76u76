<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info() {
        $comic=\App\Models\catalog::orderby('id', 'asc')->limit(2)->get();
        return view('test.info', ['comic'=>$comic]);
    }
    public function catalog() {
        $comic=\App\Models\catalog::all();
        return view('test.catalog', ['comic'=>$comic]);
}
}