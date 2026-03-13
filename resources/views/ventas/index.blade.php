<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Ventas | CapyCrunch</title>

<style>

body{
font-family:Arial;
background:#f3ede6;
margin:0;
padding:40px;
}

.header{
background:#7a4524;
color:white;
padding:20px;
text-align:center;
font-size:28px;
font-weight:bold;
}

.container{
background:white;
padding:30px;
border-radius:10px;
box-shadow:0px 4px 10px rgba(0,0,0,0.15);
}

.top-bar{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
}

.btn{
background:#c68c57;
color:white;
padding:10px 15px;
border-radius:6px;
text-decoration:none;
font-weight:bold;
margin-right:10px;
}

.btn:hover{
background:#a96d3c;
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#f0c9a4;
padding:12px;
}

td{
padding:10px;
border-bottom:1px solid #ddd;
text-align:center;
}

tr:hover{
background:#f9f1ea;
}

</style>

</head>

<body>

<div class="header">
🧾 Ventas - CapyCrunch
</div>

<div class="container">

<div class="top-bar">

<div>
<a href="/" class="btn">⬅ Volver al Inicio</a>
</div>

<a href="/ventas/create" class="btn">
+ Nueva Venta
</a>

</div>

<h2>Listado de Ventas</h2>

<table>

<thead>

<tr>
<th>ID</th>
<th>Galleta</th>
<th>Cantidad</th>
<th>Total</th>
<th>Cliente</th>
<th>Forma de Pago</th>
</tr>

</thead>

<tbody>

@foreach($ventas as $venta)

<tr>

<td>{{ $venta->id }}</td>
<td>{{ $venta->galleta->nombre }}</td>
<td>{{ $venta->cantidad }}</td>
<td>$ {{ $venta->total }}</td>
<td>{{ $venta->cliente }}</td>
<td>{{ $venta->forma_pago }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>
</html>