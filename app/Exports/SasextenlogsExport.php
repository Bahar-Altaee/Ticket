<?php

namespace App\Exports;

use App\extendusers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SasextenlogsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return extendusers::all();
    }

    public function headings(): array
    {
        return [
            'Employee Name',
            'User Name',
            'First Name',
            'Days',
            'Date',
           
        ];
    }
}
