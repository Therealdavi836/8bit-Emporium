<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\PlatformDetailExport;
use App\Models\PlatformDetail;

class PlatformDetailReportController extends Controller
{
    public function exportPdf()
    {
        $data = PlatformDetail::with(['videogame', 'platform'])->get();
        $pdf = PDF::loadView('reports.platform_details', compact('data'));
        return $pdf->download('platform_details.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PlatformDetailExport, 'platform_details.xlsx');
    }
}