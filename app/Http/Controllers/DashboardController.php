<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){

        //Eloquent ORM Approach
        //$users = User::all();

        //Query builder approach
        $users = DB::table('users')->get();

        return view('dashboard', compact('users'));
    }
}
