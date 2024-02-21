<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
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
        return view('sitereport');
    }

    public function salesreport(){
        return view('salesreport');
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
