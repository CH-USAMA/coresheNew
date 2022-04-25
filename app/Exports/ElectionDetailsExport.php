<?php

namespace App\Exports;

use App\Models\ElectionDetails;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ElectionDetailsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ElectionDetails::all()->makeHidden(['updated_at','created_at','added_by','id','status']);
    }
    public function headings(): array
    {
        return ["Provincia", "Canton", "Parroquia","Circunscripcion","Zona","Junta No.","Voters"];
    }
    // https://stackoverflow.com/questions/54245622/how-can-you-include-column-headers-when-exporting-eloquent-to-excel-in-laravel
}
