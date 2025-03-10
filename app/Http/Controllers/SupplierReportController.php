<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\SupplierExport;
use App\Models\Supplier;

class SupplierReportController extends Controller
{
    public function exportPdf()
    {
        $data = Supplier::all();
        $pdf = PDF::loadView('reports.suppliers', compact('data'));
        return $pdf->download('suppliers.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new SupplierExport, 'suppliers.xlsx');
    }
}