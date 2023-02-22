<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
class AccountImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row){
            DB::table('users')->insert([
                "name"=>$row[0],
                "email"=>$row[1],
                "password"=>$row[2]
            ]);
        }
    }
}
