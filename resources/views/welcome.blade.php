<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #00144F, #00144F);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            color: white;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: #00144F;
            color: white;
            text-align: center;
            padding: 15px 0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 15px;
            padding-left: 20px;
            z-index: 1000;
        }
        header img {
            height: 50px;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #00144F;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .container-wrapper {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 1200px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
            margin-bottom: 50px;
            color: black;
            text-align: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        .image-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .image-container img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 20, 79, 0.5);
            border-color: #00144F;
        }
        .btn-primary {
            background-color: #00144F;
            border: none;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background-color: #000E36;
        }
        .social-login a {
            margin: 5px;
            color: white;
        }
        @media (min-width: 768px) {
            .container-wrapper {
                flex-direction: row;
                text-align: left;
            }
            .login-container {
                width: 50%;
            }
            .image-container {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="assets/img/Logo_Pylsa_Colorr.png" alt="Logo de la empresa">
        <h2>SISTEMA DE COTIZACIONES ABAMEX</h2>
    </header>
    <div class="container-wrapper">
        <div class="login-container">
            <h3 class="text-center mb-3">Inicio de Sesión</h3>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label"><i class="fas fa-user"></i> Correo electronico</label>
                    <input type="text" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><i class="fas fa-lock"></i> Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe"> <i class="fas fa-check"></i> Recuérdame</label>
                    </div>
                    <a href="#"><i class="fas fa-key"></i> ¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</button>
            </form>
            <hr>
           
        </div>
        <div class="image-container">
            <img src="assets/img/ace.jpg" alt="Imagen de inicio">
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Sistema de Cotizaciones ABAMEX - Todos los derechos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
