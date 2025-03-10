<?php

namespace App\Exports;

use App\Models\RechargeTarjet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RechargeTarjetExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return RechargeTarjet::all(['code', 'name', 'type', 'currency', 'amount', 'creation_date', 'expiration_date']);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Código',
            'Nombre',
            'Tipo',
            'Moneda',
            'Monto',
            'Fecha de creación',
            'Fecha de expiración',
        ];
    }

    /**
     * @param mixed $recharge_tarjet
     *
     * @return array
     */
    public function map($recharge_tarjet): array
    {
        return [
            (string) $recharge_tarjet->code,
            $recharge_tarjet->name,
            $recharge_tarjet->type,
            $recharge_tarjet->currency,
            $recharge_tarjet->amount,
            $recharge_tarjet->creation_date,
            $recharge_tarjet->expiration_date,
        ];
    }
}