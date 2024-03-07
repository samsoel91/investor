<?php

namespace App\Http\Controllers;

use App\Models\Sales_report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SalesreportController extends Controller
{
    public function salesreport(){
        $data = Sales_report::get();
        return view('salesreport',compact('data'));
    }

    public function salesreportcreate(){
        return view ('salesreportcreate');
    }

    public function salesreportstore(Request $request){
        $validator = Validator::make($request->all(),[
            'date'      => 'required',
            'prepared'  => 'required',
            'approved'  => 'required',
            'file'      => 'required|mimes:pdf|max:20480',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $file       = $request->file('file');
        $filename   = date('Y-m-d-s');
        $path       = 'doc-salesreport/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($file));

        $data['date']       = $request->date;
        $data['prepared']   = $request->prepared;
        $data['approved']   = $request->approved;
        $data['file']       = $filename;

        Sales_report::create($data);
        return redirect()->route('admin.salesreport');
    }

    public function salesreportdelete(Request $request,$id){
        $data = Sales_report::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('admin.salesreport');
    }
}