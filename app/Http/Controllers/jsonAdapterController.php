<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class jsonAdapterController extends Controller
{
    //

    //
    public function importView(){
    
        return view('uploadJson');
    }
    
    
    public function importAction(Request $request){
        

        $this->validate($request,[
            'file' => 'required|mimes:json'
        ]);

        $fileName = time().'.'.$request->file->extension();  
   

        $request->file->move(public_path('uploads'), $fileName);

        $data = json_decode( File::get(public_path('uploads').'/'.$fileName));

       foreach($data as $fetchedData){
           echo $fetchedData->firstName.' || '.$fetchedData->address->city;

       }
        


        if($op){
              session()->flash('message','Data Uploaded Successfully');
        }else{
              session()->flash('error_message','Error in Upload Data try again');

        }
        

        return back();
    }
}
