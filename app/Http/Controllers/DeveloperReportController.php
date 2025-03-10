<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\DeveloperDetailsExport;
use App\Models\Developer;

class DeveloperReportController extends Controller
{
    public function exportPdf()
    {
        $data = Developer::all();
        $pdf = PDF::loadView('reports.developer_details', compact('data'));
        return $pdf->download('developer_details.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new DeveloperDetailsExport, 'developer_details.xlsx');
    }
}