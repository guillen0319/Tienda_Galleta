<!DOCTYPE html>
<html>

<head>

<title>Créditos | CapyCrunch</title>

<style>

body{
font-family:Arial;
background:#f3ede6;
padding:40px;
}

.container{
background:white;
padding:30px;
border-radius:10px;
}

.btn{
background:#c68c57;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

th,td{
padding:10px;
border-bottom:1px solid #ddd;
text-align:center;
}

</style>

</head>

<body>

<div class="container">

<h1>Créditos pendientes</h1>

<a href="/" class="btn">Volver</a>

<table>

<thead>

<tr>
<th>ID</th>
<th>Cliente</th>
<th>Total</th>
<th>Acción</th>
</tr>

</thead>

<tbody>

@foreach($creditos as $credito)

<tr>

<td>{{ $credito->id }}</td>
<td>{{ $credito->cliente }}</td>
<td>$ {{ $credito->total }}</td>

<td>
<a href="/creditos/pagar/{{ $credito->id }}" class="btn">
Registrar Pago
</a>
</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>

</html>
