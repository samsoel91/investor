<?php

namespace App\Http\Controllers;

use App\Models\Weekly_safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class WeeklysafetyController extends Controller
{
    public function weeklysafety(){
        $data = Weekly_safety::get();
        return view('weeklysafety',compact('data'));
    }

    public function weeklysafetycreate(){
        return view ('weeklysafetycreate');
    }

    public function weeklysafetystore(Request $request){
        $validator = Validator::make($request->all(),[
            'date'      => 'required',
            'submitted' => 'required',
            'sign'      => 'required',
            'file'      => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-weeklysafety/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['date']       = $request->date;
        $data['submitted']  = $request->submitted;
        $data['sign']       = $request->sign;
        $data['file']       = $filename;

        Weekly_safety::create($data);
        return redirect()->route('admin.weeklysafety');
    }

    public function weeklysafetydelete(Request $request,$id){
        $data = Weekly_safety::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.weeklysafety');
    }
}