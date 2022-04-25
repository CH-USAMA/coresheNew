<?php

namespace App\Imports;

use App\Models\ElectionDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Auth;
class ElectionDetailsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new ElectionDetails([
            'provincia'     => $row['provincia'],
            'canton'    => $row['canton'], 
            'parroquia' => $row['parroquia'],
            'circun' => $row['circunscripcion'],
            'zona' => $row['zona'],
            'junta_no' => $row['junta_no'],
            'voters' => $row['voters'],
            'added_by' => Auth::user()->id,
            'status' => 1,
        ]);
    }
}
