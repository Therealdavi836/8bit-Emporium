<?php

namespace App\Exports;

use App\Models\PromotionDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PromotionDetailExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PromotionDetail::with(['videogame', 'promotion'])->get()->map(function ($promotion_detail) {
            return [
                'id' => $promotion_detail->id,
                'videogames_id' => $promotion_detail->videogame_id,
                'videogame_title' => $promotion_detail->videogame->title,
                'promotions_id' => $promotion_detail->promotion_id,
                'promotion_name' => $promotion_detail->promotion->name,
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
            'Videogame ID',
            'Videogame Title',
            'Promotion ID',
            'Promotion Name',
        ];
    }
}