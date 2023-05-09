<?php

namespace App\Imports;

use App\Models\Game;
use Maatwebsite\Excel\Concerns\ToModel;

class GamesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Game([
            //
        ]);
    }
}
