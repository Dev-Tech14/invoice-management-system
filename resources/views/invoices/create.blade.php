@extends('layouts.app')

@section('content')

<div class="container">

<h2>Create Invoice</h2>

<form action="{{ route('invoices.store') }}" method="POST">

@csrf

<div class="form-group">
<label>Invoice Number</label>
<input type="text" name="invoice_number" class="form-control">
</div>

<div class="form-group">
<label>Customer Name</label>
<input type="text" name="customer_name" class="form-control">
</div>

<div class="form-group">
<label>Customer Email</label>
<input type="email" name="customer_email" class="form-control">
</div>

<div class="form-group">
<label>Amount</label>
<input type="number" name="amount" class="form-control">
</div>

<div class="form-group">
<label>Date</label>
<input type="date" name="invoice_date" class="form-control">
</div>

<br>

<button class="btn btn-success">Save Invoice</button>

</form>

</div>

@endsection