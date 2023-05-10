<?php

namespace App\Imports;

use App\Models\Game;
use Illuminate\Console\OutputStyle;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class GamesImport implements ToModel, WithProgressBar, WithHeadingRow
{
    use Importable;

    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Game([
            'rank' => $row['Rank'],
            'name' => $row['Name'],
            'platform' => $row['Platform'],
            'release_year' => $row['Year'],
            'genre' => $row['Genre'],
            'publisher' => $row['Publisher'],
            'na_sales' => $row['NA_Sales'],
            'eu_sales' => $row['EU_Sales'],
            'jp_sales' => $row['JP_Sales'],
            'other_sales' => $row['Other_Sales'],
            'global_sales' => $row['Global_Sales'],
        ]);
    }
}
