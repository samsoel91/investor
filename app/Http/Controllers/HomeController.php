<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function exsum(){
        return view('exsum');
    }

    public function tenement(){
        return view('tenement');
    }

    public function shareholder(){
        return view('shareholder');
    }

    public function mre(){
        return view('mre');
    }

    public function sitereport(){
        $data = User::get();
        return view('sitereport',compact('data'));
    }

    public function safetyreport(){
        $data = User::get();
        return view('safetyreport',compact('data'));
    }

    public function salesreport(){
        $data = User::get();
        return view('salesreport',compact('data'));
    }

    public function quarry(){
        return view('quarry');
    }

    public function gallery(){
        return view('gallery'); 
    }

    public function calendar(){
        return view('calendar');
    }

    public function user(){
        $data = User::get();
        return view('index',compact('data'));
    }


    public function index(){
        $data = User::get();
        return view('index',compact('data'));
    }
}
