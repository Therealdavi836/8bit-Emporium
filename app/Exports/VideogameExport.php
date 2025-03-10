<?php

namespace App\Exports;

use App\Models\Videogame;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VideogameExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Videogame::with(['supplier', 'developer'])->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Título',
            'Descripción',
            'Precio',
            'Proveedor',
            'Desarrollador',
        ];
    }

    /**
     * @param mixed $videogame
     *
     * @return array
     */
    public function map($videogame): array
    {
        return [
            $videogame->id,
            $videogame->title,
            $videogame->description,
            $videogame->price,
            $videogame->supplier->name,
            $videogame->developer->name,
        ];
    }
}