<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Agregar Galleta - CapyCrunch</title>

<style>

body{
font-family:Arial;
background:#f3ede6;
margin:0;
}

.header{
background:#6b3f1d;
color:white;
padding:20px;
text-align:center;
font-size:28px;
}

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

.container{
width:40%;
margin:auto;
margin-top:50px;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

input{
width:100%;
padding:10px;
margin-top:5px;
margin-bottom:20px;
border-radius:6px;
border:1px solid #ccc;
}

button{
background:#6b3f1d;
color:white;
padding:12px;
border:none;
border-radius:8px;
width:100%;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#4b2c14;
}

h2{
text-align:center;
margin-bottom:25px;
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
</div>

<div class="container">

<h2>Agregar Nueva Galleta 🍪</h2>

<form action="/galletas" method="POST">

@csrf

<label>Nombre</label>
<input type="text" name="nombre" required>

<label>Precio</label>
<input type="number" step="0.01" name="precio" required>

<label>Stock</label>
<input type="number" name="stock" required>

<button type="submit">
Guardar Galleta
</button>

</form>

</div>

</body>
</html>