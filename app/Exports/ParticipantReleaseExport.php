<?php

namespace App\Exports;

use App\Models\ParticipantRelease;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParticipantReleaseExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ParticipantRelease::with(['user', 'release'])->get()->map(function ($participant_release) {
            return [
                'id' => $participant_release->id,
                'users_id' => $participant_release->users_id,
                'user_name' => $participant_release->user->name,
                'releases_id' => $participant_release->releases_id,
                'release_name' => $participant_release->release->name,
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
            'User Name',
            'Release ID',
            'Release Name',
        ];
    }
}