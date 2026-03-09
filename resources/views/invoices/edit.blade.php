@extends('layouts.app')

@section('content')

<div class="container">

<h2>Edit Invoice</h2>

<form action="{{ route('invoices.update',$invoice->id) }}" method="POST">

@csrf
@method('PUT')

<div class="form-group">
<label>Invoice Number</label>
<input type="text" name="invoice_number" class="form-control" value="{{ $invoice->invoice_number }}">
</div>

<div class="form-group">
<label>Customer Name</label>
<input type="text" name="customer_name" class="form-control" value="{{ $invoice->customer_name }}">
</div>

<div class="form-group">
<label>Customer Email</label>
<input type="email" name="customer_email" class="form-control" value="{{ $invoice->customer_email }}">
</div>

<div class="form-group">
<label>Amount</label>
<input type="number" name="amount" class="form-control" value="{{ $invoice->amount }}">
</div>

<div class="form-group">
<label>Date</label>
<input type="date" name="invoice_date" class="form-control" value="{{ $invoice->invoice_date }}">
</div>

<br>

<button class="btn btn-primary">Update Invoice</button>

</form>

</div>

@endsection