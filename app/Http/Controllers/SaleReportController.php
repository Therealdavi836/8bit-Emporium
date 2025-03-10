<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\SaleDetailsExport;
use App\Models\SaleDetail;

class SaleReportController extends Controller
{
    public function exportPdf()
    {
        $data = SaleDetail::all();
        $pdf = PDF::loadView('reports.sale_details', compact('data'));
        return $pdf->download('sale_details.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new SaleDetailsExport, 'sale_details.xlsx');
    }
}