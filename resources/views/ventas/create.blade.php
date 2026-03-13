<!DOCTYPE html>
<html>

<head>

<title>Nueva Venta | CapyCrunch</title>

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
width:500px;
margin:auto;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

h1{
text-align:center;
color:#7a4524;
}

label{
display:block;
margin-top:15px;
font-weight:bold;
}

input,select{
width:100%;
padding:10px;
margin-top:5px;
border-radius:5px;
border:1px solid #ccc;
}

button{
margin-top:20px;
width:100%;
padding:12px;
background:#c68c57;
border:none;
color:white;
font-size:16px;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#a96d3c;
}

</style>

</head>

<body>

<div class="container">

<h1>Registrar Venta 🍪</h1>

<form action="/ventas" method="POST">

@csrf

<label>Galleta</label>

<select name="galleta_id" required>

@foreach($galletas as $galleta)

<option value="{{ $galleta->id }}">
{{ $galleta->nombre }} - ${{ $galleta->precio }}
</option>

@endforeach

</select>


<label>Cantidad</label>
<input type="number" name="cantidad" required>


<label>Cliente</label>
<input type="text" name="cliente" required>


<label>Forma de pago</label>

<select name="forma_pago">

<option value="Efectivo">Efectivo</option>
<option value="Tarjeta">Tarjeta</option>
<option value="Credito">Credito</option>

</select>


<button type="submit">
Guardar Venta
</button>

</form>

</div>

</body>

</html>
