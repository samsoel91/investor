<?php

namespace App\Http\Controllers;

use App\Models\Shareholder;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Cache\Store;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ShareholderController extends Controller
{
    public function shareholder(){
        $data = Shareholder::get();
        return view('shareholder',compact('data'));
    }

    public function shareholdercreate(){
        return view('shareholdercreate');
    }

    public function shareholderstore(Request $request){
        $validator = Validator::make($request->all(),[
            'namefile' => 'required',
            'date' => 'required',
            'file'  => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-shareholder/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['namefile']   = $request->namefile;
        $data['date']       = $request->date;
        $data['file']       = $filename;

        Shareholder::create($data);
        return redirect()->route('admin.shareholder');

    }


    public function shareholderdelete(Request $request,$id){
        $data = Shareholder::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.shareholder');
    }

}
