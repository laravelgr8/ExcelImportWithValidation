<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Imports\ExcelImport;
use Excel;
class StudentController extends Controller
{
    public function index(){
        return view('excel-upload');
    }
    
    public function excelSave(Request $request){
        $file=$request->file('excelfile');
        $data=Excel::Import(new ExcelImport,$file);
        dd($data);
            
    }
}
