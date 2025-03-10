<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\ParticipantReleaseExport;
use App\Models\ParticipantRelease;

class ParticipantReleaseReportController extends Controller
{
    public function exportPdf()
    {
        $data = ParticipantRelease::all();
        $pdf = PDF::loadView('reports.participant_release', compact('data'));
        return $pdf->download('participant_release.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new ParticipantReleaseExport, 'participant_release.xlsx');
    }
}