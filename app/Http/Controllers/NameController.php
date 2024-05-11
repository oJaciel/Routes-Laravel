<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function getName() {
        return view (
            "page2", ['name' => User::all()]
        );
    }
}
