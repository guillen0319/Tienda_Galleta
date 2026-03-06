<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>CapyCrunch</title>

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
font-size:32px;
font-weight:bold;
}

/* MENU */

.menu{
background:#c68c57;
text-align:center;
padding:15px;
}

.menu a{
text-decoration:none;
color:#3d1f0e;
margin:0 25px;
font-size:18px;
font-weight:bold;
}

/* CONTENIDO */

.container{
text-align:center;
padding:60px;
}

.icon{
font-size:80px;
}

h1{
color:#5a2f15;
font-size:40px;
margin-top:10px;
}

.sub{
color:#444;
margin-bottom:40px;
}

/* CARDS */

.cards{
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
}

.card{
background:white;
padding:30px;
width:220px;
border-radius:12px;
box-shadow:0px 3px 10px rgba(0,0,0,0.15);
text-decoration:none;
color:black;
}

.card:hover{
transform:scale(1.05);
}

.card h3{
margin-top:10px;
}

</style>

</head>

<body>

<div class="header">
🦫 🍪 CapyCrunch
</div>

<div class="menu">
<a href="/galletas">Inventario</a>
<a href="#">Ventas</a>
<a href="#">Créditos</a>
<a href="#">Reporte Diario</a>
</div>

<div class="container">

<div class="icon">🍪</div>

<h1>Sistema de Gestión de Galletas</h1>

<p class="sub">
Administra inventario, ventas y pagos de CapyCrunch
</p>

<div class="cards">

<a class="card" href="/galletas">
<h3>🍪 Inventario</h3>
<p>Gestionar galletas</p>
</a>

<a class="card" href="#">
<h3>🧾 Ventas</h3>
<p>Registrar ventas</p>
</a>

<a class="card" href="#">
<h3>💳 Créditos</h3>
<p>Pagos pendientes</p>
</a>

<a class="card" href="#">
<h3>📊 Reportes</h3>
<p>Ventas del día</p>
</a>

</div>

</div>

</body>
</html>