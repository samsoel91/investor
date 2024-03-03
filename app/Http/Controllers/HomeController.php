<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
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

    public function user(Request $request){
        $data = new User;
        if($request->get('search')){
            $data = $data->where('name','LIKE','%'.$request->get('search').'%')
            ->orWhere('email','LIKE','%'.$request->get('search').'%');
        }
        $data = $data->get();
        return view('user',compact('data','request'));
    }

    public function create(){
        return view('create');
    }

    public function storeuser(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'name'  => 'required',
            'password'  => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']      = $request->email;
        $data['name']       = $request->name;
        $data['password']   = Hash::make($request->password); 
        User::create($data);
        return redirect()->route('admin.user');

    }

    public function edituser(Request $request,$id){
        $data = User::find($id);
        return view('edituser',compact('data'));
    }

    public function updateuser(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'email'     => 'required|email',
            'name'      => 'required',
            'password'  => 'nullable',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }
            
        User::whereId($id)->update($data);
        return redirect()->route('admin.user');
    }

    public function deleteuser(Request $request,$id){
        $data = User::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.user');
    }


    public function document(){
        return view('document');
    }
    public function index(){
        $data = User::get();
        return view('index',compact('data'));
    }
}
