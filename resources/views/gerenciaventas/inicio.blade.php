@extends('gerenciaventas.layouts.templatep')


@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #00144F;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .welcome-container {
            background: white;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            max-width: 2000px; 
            width: 95%; 
            margin: 40px auto; 
        }
        .welcome-title {
            font-size: 50px;
            color: #00144F;
            margin-bottom: 30px;
        }
        .welcome-image {
            width: 100%;
            max-width: 1000px; 
            height: auto;
            border-radius: 15px;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1 class="welcome-title">¡Bienvenido Gerencia de Ventas!</h1>
        <img src="assets/img/ace.jpg" alt="Logo de Pylsa" class="welcome-image">
    </div>

</body>
</html>



    @endsection