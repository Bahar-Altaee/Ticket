<?php

namespace App\Exports;

use App\Sasextenlog;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExtendlogExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Sasextenlog::all();
    }

    public function headings(): array
    {
        return [
            'Employee Name',
            'User Name',
            'First Name',
            'SAS Expiration',
            'SAS new Expiration',
            'Date',
        ];
    }
}
