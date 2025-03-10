<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\CategoryDetailsExport;
use App\Models\CategoryDetail;

class CategoryDetailReportController extends Controller
{
    public function exportPdf()
    {
        $data = CategoryDetail::all();
        $pdf = PDF::loadView('reports.category_details', compact('data'));
        return $pdf->download('category_details.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new CategoryDetailsExport, 'category_details.xlsx');
    }
}