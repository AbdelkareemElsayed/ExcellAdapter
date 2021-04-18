<?php

namespace App\Models\Imports;
use App\Models\sheetone;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class firstsheet implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new sheetone([
            'segment'                => $row['segment'],
            'country'                => $row['country'],
            'product'                => $row['product'],
            'discountBand'           => $row['discount_band'],
            'unitSolid'              => $row['units_sold'],
            'ManuFactoring'          => $row['manufacturing_price'],
            "sale_price"             => $row['sale_price'],
            "gross_sales"            => $row['gross_sales'],
            "discounts"              => $row['discounts'],
            "sales"                  => $row['sales'],
            "cogs"                   => $row['cogs'],
            "profit"                 => $row['profit'],
            "date"                   => $row['date'],
            "month_number"           => $row['month_number'],
            "month_name"             => $row['month_name'],
            "year"                   => $row['year'],

        ]);
    }
}