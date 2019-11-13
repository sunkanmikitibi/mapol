<?php

namespace App\Exports;

use App\Officer;
use Maatwebsite\Excel\Concerns\FromCollection;

class OfficerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Officer::all();
    }
}
