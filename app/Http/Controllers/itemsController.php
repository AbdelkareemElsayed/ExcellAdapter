<?php

namespace App\Http\Controllers;

use App\Models\Imports\mainsheets;
use Illuminate\Http\Request;
use Excel;

class itemsController extends Controller
{
    //
    public function importView(){
    
        return view('uploadExcell');
    }
    
    
    public function importAction(){
        
        Excel::import(new mainsheets,request()->file('file'));
             
        return back();
    }
    
}
