<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\PromotionExport;
use App\Models\Promotion;

class PromotionReportController extends Controller
{
    public function exportPdf()
    {
        $data = Promotion::all();
        $pdf = PDF::loadView('reports.promotions', compact('data'));
        return $pdf->download('promotions.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PromotionExport, 'promotions.xlsx');
    }
}