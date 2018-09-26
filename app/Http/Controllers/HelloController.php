<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function show(){
        return response()->json(['message' => 'HelloWord'], 200);
    }
}
