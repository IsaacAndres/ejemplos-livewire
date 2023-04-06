<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InfiniteScrollController extends Controller
{
    public function list()
    {
        $users = User::all();

        return view('infinite.list', compact('users'));
    }
}
