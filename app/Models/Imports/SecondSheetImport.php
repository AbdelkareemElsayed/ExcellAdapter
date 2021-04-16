<?php

namespace App\Models\Imports;
use App\Models\students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class SecondSheetImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new students([
            'name'                => $row['name'],
            'email'               => $row['email'],
    
        ]);
    }
}