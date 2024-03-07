<?php

namespace App\Http\Controllers;

use App\Models\Daily_safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DailysafetyController extends Controller
{
    public function dailysafety(){
        $data = Daily_safety::get();
        return view('dailysafety',compact('data'));
    }

    public function dailysafetycreate(){
        return view ('dailysafetycreate');
    }

    public function dailysafetystore(Request $request){
        $validator = Validator::make($request->all(),[
            'date'      => 'required',
            'submitted' => 'required',
            'sign'      => 'required',
            'file'      => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-dailysafety/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['date']       = $request->date;
        $data['submitted']  = $request->submitted;
        $data['sign']       = $request->sign;
        $data['file']       = $filename;

        daily_safety::create($data);
        return redirect()->route('admin.dailysafety');
    }

    public function dailysafetydelete(Request $request,$id){
        $data = daily_safety::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.dailysafety');
    }
}