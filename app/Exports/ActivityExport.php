<?php

namespace App\Exports;

use App\Models\ActivityTypes;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActivityExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ActivityTypes::all();
    }
}
