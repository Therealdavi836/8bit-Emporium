<?php

namespace App\Exports;

use App\Models\CategoryDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CategoryDetailsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return CategoryDetail::all(['id', 'videogames_id', 'categories_id']);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Videojuego ID',
            'Categoria ID',
        ];
    }
}