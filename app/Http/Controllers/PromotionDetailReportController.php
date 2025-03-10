<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\PromotionDetailExport;
use App\Models\PromotionDetail;

class PromotionDetailReportController extends Controller
{
    public function exportPdf()
    {
        $data = PromotionDetail::with(['videogame', 'promotion'])->get();
        $pdf = PDF::loadView('reports.promotion_details', compact('data'));
        return $pdf->download('promotion_details.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PromotionDetailExport, 'promotion_details.xlsx');
    }
}