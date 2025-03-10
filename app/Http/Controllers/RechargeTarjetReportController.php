<?php
// filepath: /C:/Users/alejo/OneDrive/Escritorio/proyecto-laravel-proyectojaa/ProyectoVideojuegos/app/Http/Controllers/RechargeTarjetReportController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\RechargeTarjetExport;
use App\Models\RechargeTarjet;

class RechargeTarjetReportController extends Controller
{
    public function exportPdf()
    {
        $data = RechargeTarjet::all();
        $pdf = PDF::loadView('reports.recharge_tarjets', compact('data'));
        return $pdf->download('recharge_tarjets.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new RechargeTarjetExport, 'recharge_tarjets.xlsx');
    }
}