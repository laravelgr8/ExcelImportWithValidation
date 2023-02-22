<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use App\Imports\StudentImport;
use App\Imports\AccountImport;
class ExcelImport implements WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
//    public function collection(Collection $collection)
//    {
//        //
//    }
    
    public function sheets() : array
    {
        return [
            0=>new StudentImport,
            1=>new AccountImport
        ];
    }
}
