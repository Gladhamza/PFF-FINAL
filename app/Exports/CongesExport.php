<?php

namespace App\Exports;

use App\Models\LeaveApplication;
use Maatwebsite\Excel\Concerns\FromCollection;

class CongesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LeaveApplication::all();
    }
}
