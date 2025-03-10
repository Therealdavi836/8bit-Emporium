<?php

namespace App\Exports;

use App\Models\PlatformDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlatformDetailExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PlatformDetail::with(['videogame', 'platform'])->get()->map(function ($platform_detail) {
            return [
                'id' => $platform_detail->id,
                'videogames_id' => $platform_detail->videogames_id,
                'videogame_title' => $platform_detail->videogame->title,
                'platforms_id' => $platform_detail->platforms_id,
                'platform_name' => $platform_detail->platform->name,
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
            'Platform ID',
            'Platform Name',
        ];
    }
}