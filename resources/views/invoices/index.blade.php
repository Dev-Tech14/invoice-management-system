@extends('layouts.app')

@section('content')
<div class="container">

<h2>Invoices</h2>

<a href="{{ route('invoices.create') }}" class="btn btn-primary mb-3">Create Invoice</a>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Invoice Number</th>
<th>Customer</th>
<th>Amount</th>
<th>Date</th>
<th>Action</th>
</tr>

@foreach($invoices as $invoice)
<tr>
<td>{{ $invoice->id }}</td>
<td>{{ $invoice->invoice_number }}</td>
<td>{{ $invoice->customer_name }}</td>
<td>{{ $invoice->amount }}</td>
<td>{{ $invoice->invoice_date }}</td>

<td>
<a href="{{ route('invoices.pdf',$invoice->id) }}" class="btn btn-info">Download PDF</a>

<a href="{{ route('invoices.edit',$invoice->id) }}" class="btn btn-warning">Edit</a>

<form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button class="btn btn-danger">Delete</button>
</form>

</td>
</tr>
@endforeach

</table>

</div>
@endsection