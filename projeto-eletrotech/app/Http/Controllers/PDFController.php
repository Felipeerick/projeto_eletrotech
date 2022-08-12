<?php

namespace App\Http\Controllers;

use App\Models\OrderService;
use PDF;

class PDFController extends Controller
{
    public function __construct(OrderService $order)
    {
        $this->orderService = $order;
    }

    public function pdf($id)
    {
        if(!$order = $this->orderService->find($id))
        return redirect()->route('orderService.index');
        
        $pdf = PDF::loadview('pdf.pdf', compact('order'));
        
        return $pdf->setpaper('a4')->stream('OS.pdf');
    }
}
