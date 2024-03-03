<?php

namespace App\Http\Controllers;

use App\Models\Weekly_site;
use Illuminate\Http\Request;

class WeeklysiteController extends Controller
{
    public function weeklysite(){
        $data = Weekly_site::get();
        return view('weeklysite',compact('data'));
    }

    public function weeklysitecreate(){
        return view ('createdaily');
    }
}