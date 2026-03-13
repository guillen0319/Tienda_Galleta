<!DOCTYPE html>
<html>

<head>

<title>Pagar Crédito</title>

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
width:400px;
margin:auto;
}

input{
width:100%;
padding:10px;
margin-top:10px;
}

button{
margin-top:20px;
padding:10px;
background:#c68c57;
color:white;
border:none;
width:100%;
}

</style>

</head>

<body>

<div class="container">

<h2>Pago de crédito</h2>

<p>Cliente: {{ $venta->cliente }}</p>
<p>Total: ${{ $venta->total }}</p>

<form action="/creditos/pagar" method="POST">

@csrf

<input type="hidden" name="venta_id" value="{{ $venta->id }}">

<label>Monto a pagar</label>
<input type="number" name="monto" required>

<button type="submit">
Guardar Pago
</button>

</form>

</div>

</body>

</html>
