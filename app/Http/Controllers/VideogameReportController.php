<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\VideogameExport;
use App\Models\Videogame;

class VideogameReportController extends Controller
{
    public function exportPdf()
    {
        $data = Videogame::with(['supplier', 'developer'])->get();
        $pdf = PDF::loadView('reports.videogames', compact('data'));
        return $pdf->download('videogames.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new VideogameExport, 'videogames.xlsx');
    }
}