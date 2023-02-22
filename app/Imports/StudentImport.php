<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class StudentImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        Validator::make($collection->toArray(), [
             '*.name' => 'required',
             '*.email' => 'required',
             '*.mobile' => 'required',
         ])->validate();
        
        foreach($collection as $row){
            DB::table('students')->insert([
                "name"=>$row['name'],
                "email"=>$row['email'],
                "mobile"=>$row['mobile']
            ]);
        }
    }
}
