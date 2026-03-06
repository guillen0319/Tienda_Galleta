<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Editar Galleta | CapyCrunch</title>

<style>

body{
font-family: Arial;
margin:0;
background:#f3ede6;
}

/* HEADER */

.header{
background:#7a4524;
color:white;
text-align:center;
padding:20px;
font-size:30px;
font-weight:bold;
}

/* CONTENEDOR */

.container{
width:500px;
margin:50px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0px 3px 10px rgba(0,0,0,0.2);
}

h2{
text-align:center;
color:#5a2f15;
}

/* FORM */

label{
display:block;
margin-top:15px;
font-weight:bold;
}

input{
width:100%;
padding:10px;
margin-top:5px;
border-radius:5px;
border:1px solid #ccc;
}

/* BOTONES */

.buttons{
margin-top:20px;
display:flex;
justify-content:space-between;
}

.btn{
padding:10px 20px;
border:none;
border-radius:6px;
cursor:pointer;
text-decoration:none;
}

.btn-save{
background:#4CAF50;
color:white;
}

.btn-back{
background:#777;
color:white;
}

</style>

</head>

<body>

<div class="header">
🦫 🍪 CapyCrunch
</div>

<div class="container">

<h2>Editar Galleta</h2>

<form action="/galletas/{{ $galleta->id }}" method="POST">

@csrf
@method('PUT')

<label>Nombre</label>
<input type="text" name="nombre" value="{{ $galleta->nombre }}" required>

<label>Precio</label>
<input type="number" step="0.01" name="precio" value="{{ $galleta->precio }}" required>

<label>Stock</label>
<input type="number" name="stock" value="{{ $galleta->stock }}" required>

<div class="buttons">

<button type="submit" class="btn btn-save">
Actualizar
</button>

<a href="/galletas" class="btn btn-back">
Volver
</a>

</div>

</form>

</div>

</body>

</html>