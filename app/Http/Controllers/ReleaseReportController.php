<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\ReleaseExport;
use App\Models\Release;

class ReleaseReportController extends Controller
{
    public function exportPdf()
    {
        $data = Release::all();
        $pdf = PDF::loadView('reports.releases', compact('data'));
        return $pdf->download('releases.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new ReleaseExport, 'releases.xlsx');
    }
}