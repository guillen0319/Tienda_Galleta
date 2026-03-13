<!DOCTYPE html>
<html>

<head>

<title>Reporte Diario | CapyCrunch</title>

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

h1{
color:#7a4524;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

th{
background:#f0c9a4;
padding:10px;
}

td{
padding:10px;
border-bottom:1px solid #ddd;
text-align:center;
}

.btn{
background:#c68c57;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="container">

<h1>📊 Reporte Diario de Ventas</h1>

<a href="/" class="btn">Volver</a>

<table>

<thead>

<tr>
<th>Producto</th>
<th>Forma de Pago</th>
<th>Cantidad Vendida</th>
<th>Total Vendido</th>
</tr>

</thead>

<tbody>

@foreach($reporte as $r)

<tr>

<td>{{ $r->nombre }}</td>
<td>{{ $r->forma_pago }}</td>
<td>{{ $r->cantidad }}</td>
<td>$ {{ $r->total }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>

</html>
