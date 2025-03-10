<?php

namespace App\Exports;

use App\Models\SaleDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaleDetailsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return SaleDetail::with(['user', 'videogame'])->get()->map(function ($sale_detail) {
            return [
                'id' => $sale_detail->id,
                'users_id' => $sale_detail->users_id,
                'videogames_id' => $sale_detail->videogames_id,
                'quantity' => $sale_detail->quantity,
                'sale_date' => $sale_detail->sale_date,
            ];
        });
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'User ID',
            'Videogame ID',
            'Quantity',
            'Sale Date',
        ];
    }

    /**
     * @param mixed $sale_detail
     *
     * @return array
     */
    public function map($sale_detail): array
    {
        return [
            $sale_detail->id,
            $sale_detail->user->name,
            $sale_detail->videogame->title,
            $sale_detail->quantity,
            $sale_detail->sale_date,
        ];
    }
}