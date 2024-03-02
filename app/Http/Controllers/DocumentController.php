<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Contracts\Cache\Store;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function document(){
        $data = Document::get();
        return view('document',compact('data'));
    }

    public function createdocument(){
        return view('createdocument');
    }

    public function storedocument(Request $request){
        $validator = Validator::make($request->all(),[
            'namefile' => 'required',
            'date'  => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file      = $request->file('file');
        $filename   = date('Y-m-d');
        $path       = 'document-file/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['namefile']       = $request->namefile;
        $data['date']           = $request->date;
        $data['image']          = $filename;  
        Document::create($data);
        return redirect()->route('admin.document');

    }
}
