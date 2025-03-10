<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\UserExport;
use App\Models\User;

class UserReportController extends Controller
{
    public function exportPdf()
    {
        $data = User::with('role')->get();
        $pdf = PDF::loadView('reports.users', compact('data'));
        return $pdf->download('users.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }
}