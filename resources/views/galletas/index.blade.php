<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inventario - CapyCrunch</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f3ede6;
    margin:0;
}

/* HEADER */

.header{
    background:#6b3f1d;
    color:white;
    padding:20px;
    text-align:center;
    font-size:28px;
    font-weight:bold;
}

/* MENU */

.menu{
    background:#c58b55;
    padding:12px;
    text-align:center;
}

.menu a{
    color:white;
    text-decoration:none;
    margin:0 20px;
    font-weight:bold;
}

.menu a:hover{
    text-decoration:underline;
}

/* CONTENEDOR */

.container{
    width:90%;
    margin:auto;
    margin-top:40px;
}

/* BOTON */

.btn{
    background:#6b3f1d;
    color:white;
    padding:10px 18px;
    border:none;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.btn:hover{
    background:#4b2c14;
}

/* TABLA */

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:20px;
    border-radius:10px;
    overflow:hidden;
}

th{
    background:#6b3f1d;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

/* ACCIONES */

.btn-edit{
    background:#2e86de;
    color:white;
    padding:6px 10px;
    border-radius:6px;
    text-decoration:none;
}

.btn-delete{
    background:#e74c3c;
    color:white;
    padding:6px 10px;
    border-radius:6px;
    text-decoration:none;
}

.title{
    font-size:26px;
    margin-bottom:20px;
}

</style>

</head>

<body>

<div class="header">
🦫🍪 CapyCrunch
</div>

<div class="menu">
<a href="/">Inicio</a>
<a href="/galletas">Inventario</a>
<a href="#">Ventas</a>
<a href="#">Créditos</a>
<a href="#">Reporte Diario</a>
</div>

<div class="container">

<div style="display:flex; justify-content:space-between; align-items:center;">
<div class="title">📦 Inventario de Galletas</div>

<a href="/galletas/create" class="btn">
+ Agregar Galleta
</a>
</div>

<table>

<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

@foreach($galletas as $galleta)

<tr>
<td>{{ $galleta->id }}</td>
<td>{{ $galleta->nombre }}</td>
<td>$ {{ $galleta->precio }}</td>
<td>{{ $galleta->stock }}</td>

<td>

<a href="/galletas/{{ $galleta->id }}/edit" class="btn-edit">
Editar
</a>

<form action="/galletas/{{ $galleta->id }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')

<button class="btn-delete">
Eliminar
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>
</html>