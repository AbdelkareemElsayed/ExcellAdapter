<?php

namespace App\Http\Controllers;
use App\Models\jsonModel;
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
           'file' => 'required|mimes:json|max:2048'
        ]);

        $fileName = time().'.'.$request->file->extension();  

        try {
            // Validate the value...
       
        $request->file->move(public_path('uploads'), $fileName);

        $data = json_decode( File::get(public_path('uploads').'/'.$fileName));
     
        foreach($data as $key => $fetchedData){

           jsonModel::create( [
            'FirstName'      => $fetchedData->firstName,
            'LastName'       => $fetchedData->lastName,
            'gender'         => $fetchedData->gender,
            'age'            => $fetchedData->age,
            'streetAddress'  => $fetchedData->address->streetAddress,
            'city'           => $fetchedData->address->city,
            'state'          => $fetchedData->address->state,
            'type'           => $fetchedData->phoneNumbers[0]->type,
            'number'         => $fetchedData->phoneNumbers[0]->number,
                             ] );
      
       }

       session()->flash('message','Data Uploaded Successfully');

    } catch (Throwable $e) {
        session()->flash('error_message','Error in Upload Data try again');
       // return false;
    }


        return back();
    }
}
