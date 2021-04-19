<?php 

namespace App\Models\Imports;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;

class mainsheets implements WithMultipleSheets ,SkipsUnknownSheets
{
  

    public function sheets(): array
    {
        
        return [
            new firstsheet()
            ];
    }



    public function onUnknownSheet($sheetName)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$sheetName} was skipped");
    }
}