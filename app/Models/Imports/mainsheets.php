<?php 

namespace App\Models\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class mainsheets implements WithMultipleSheets 
{
   
    public function sheets(): array
    {
        return [
             0 => new FirstSheetImport(),
             1 => new SecondSheetImport(),
        ];
    }
}