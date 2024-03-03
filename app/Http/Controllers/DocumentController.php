<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Yajra\DataTables\Facades\DataTables;
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
            'date' => 'required',
            'file'  => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-user/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['namefile']   = $request->namefile;
        $data['date']       = $request->date;
        $data['file']       = $filename;

        Document::create($data);
        return redirect()->route('admin.document');

    }

    public function editdocument(Request $request,$id){
        $data = Document::find($id);
        return view('editdocument',compact('data'));
    }

    public function updatedocument(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'namefile'  => 'required',
            'date'      => 'required',
            'file'      => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['namefile'] = $request->namefile;
        $data['date'] = $request->date;
        $data['file'] = $request->file;
            
        Document::whereId($id)->update($data);
        return redirect()->route('admin.document');
    }

    public function deletedocument(Request $request,$id){
        $data = Document::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.document');
    }

}
