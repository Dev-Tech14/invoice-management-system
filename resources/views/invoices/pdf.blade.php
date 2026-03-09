<!DOCTYPE html>
<html>
<head>
<style>

body{
font-family: Arial;
}

.header{
text-align:center;
margin-bottom:20px;
}

.company{
font-size:22px;
font-weight:bold;
}

table{
width:100%;
border-collapse: collapse;
margin-top:20px;
}

table, th, td{
border:1px solid black;
}

th, td{
padding:10px;
text-align:left;
}

.footer{
margin-top:40px;
text-align:right;
}

</style>
</head>

<body>

<div class="header">
<div class="company">ABC Company Pvt Ltd</div>
<p>Invoice Management System</p>
</div>

<hr>

<h3>Invoice Details</h3>

<table>

<tr>
<th>Invoice ID</th>
<td>{{ $invoice->id }}</td>
</tr>

<tr>
<th>Invoice Number</th>
<td>{{ $invoice->invoice_number }}</td>
</tr>

<tr>
<th>Customer Name</th>
<td>{{ $invoice->customer_name }}</td>
</tr>

<tr>
<th>Customer Email</th>
<td>{{ $invoice->customer_email }}</td>
</tr>

<tr>
<th>Invoice Date</th>
<td>{{ $invoice->invoice_date }}</td>
</tr>

<tr>
<th>Total Amount</th>
<td>₹ {{ $invoice->amount }}</td>
</tr>

</table>

<div class="footer">
<p>Authorized Signature</p>
</div>

</body>
</html>