<?php

namespace App\Http\Controllers;

use App\Models\Imports\mainsheets;
use Illuminate\Http\Request;
use Excel;
use File;

class ExcellAdapterController extends Controller
{
    //
    public function importView(){
    
        return view('uploadExcell');
    }
    
    
    public function importAction(Request $request){
        

        $this->validate($request,[
            'file' => 'required|mimes:cvs,xls,xlsx'
        ]);

    //     $fileName = time().'.'.$request->file->extension();  
    //   $op =   $request->file->move(public_path('uploads/Excel'), $fileName);

        $op = Excel::import(new mainsheets,request()->file('file'));

             
        if($op){
              session()->flash('message','Data Uploaded Successfully');
        }else{
              session()->flash('error_message','Error in Upload Data try again');

        }
        

        return back();









    }
    
}
