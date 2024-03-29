<?php

namespace App\Http\Controllers;

use App\Models\Weekly_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class WeeklysiteController extends Controller
{
    public function weeklysite(){
        $data = Weekly_site::get();
        return view('weeklysite',compact('data'));
    }

    public function weeklysitecreate(){
        return view ('weeklysitecreate');
    }

    public function weeklysitestore(Request $request){
        $validator = Validator::make($request->all(),[
            'date'      => 'required',
            'submitted' => 'required',
            'sign'      => 'required',
            'file'      => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-weeklysite/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['date']       = $request->date;
        $data['submitted']  = $request->submitted;
        $data['sign']       = $request->sign;
        $data['file']       = $filename;

        Weekly_site::create($data);
        return redirect()->route('admin.weeklysite');
    }

    public function weeklysitedelete(Request $request,$id){
        $data = Weekly_site::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.weeklysite');
    }
}