<?php

namespace App\Exports;

use App\Models\Release;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReleaseExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Release::all(['name', 'date', 'description']);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nombre',
            'Fecha',
            'Descripción',
        ];
    }
}