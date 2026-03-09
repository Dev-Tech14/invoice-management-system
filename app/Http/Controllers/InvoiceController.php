<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{

public function index()
{
    $invoices = Invoice::all();
    return view('invoices.index', compact('invoices'));
}

public function create()
{
    return view('invoices.create');
}

public function store(Request $request)
{
    Invoice::create($request->all());
    return redirect()->route('invoices.index');
}

public function edit($id)
{
    $invoice = Invoice::find($id);
    return view('invoices.edit', compact('invoice'));
}

public function update(Request $request, $id)
{
    $invoice = Invoice::find($id);
    $invoice->update($request->all());
    return redirect()->route('invoices.index');
}

public function destroy($id)
{
    $invoice = Invoice::find($id);
    $invoice->delete();
    return redirect()->route('invoices.index');
}



public function generatePDF($id)
{
    $invoice = Invoice::find($id);

    $html = view('invoices.pdf', compact('invoice'))->render();

    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHTML($html);

    return $mpdf->Output('invoice.pdf', 'D');
}
}
