<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NameController extends Controller
{

    public function getIndex() {
        return view('page1');
    }

    public function getName(Request $request) {
        $name = $request->name;
        return view('page2', ['name' => $name]);
    }
}
