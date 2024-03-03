<?php

namespace App\Http\Controllers;

use App\Models\Daily_site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DailysiteController extends Controller
{
    public function dailysite(){
        $data = Daily_site::get();
        return view('dailysite',compact('data'));
    }

    public function dailysitecreate(){
        return view ('dailysitecreate');
    }

    public function dailysitestore(Request $request){
        $validator = Validator::make($request->all(),[
            'date'      => 'required',
            'submitted' => 'required',
            'sign'      => 'required',
            'file'      => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-dailysite/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['date']       = $request->date;
        $data['submitted']  = $request->submitted;
        $data['sign']       = $request->sign;
        $data['file']       = $filename;

        Daily_site::create($data);
        return redirect()->route('admin.dailysite');
    }

    public function dailysitedelete(Request $request,$id){
        $data = Daily_site::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.dailysite');
    }
}
