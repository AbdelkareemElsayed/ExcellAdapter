<?php

namespace App\Models\Imports;
use App\Models\sheettwo;
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
        return new sheettwo([
            'product_num'         => $row['id'],
            'choice'              => $row['choice'],
            'price'               => $row['price'],
            'feature'             => $row['feature'],
            'display'             => $row['display'],

    
        ]);
    }
}