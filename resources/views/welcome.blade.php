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
        <h2>Sistema de Gestión de Líquidos</h2>
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
            <p class="text-center">o inicia sesión con</p>
            <div class="d-flex justify-content-center social-login">
                <a href="#" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg></a>
                <a href="#" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg></a>
                <a href="#" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                  <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                </svg></i></a>
            </div>
        </div>
        <div class="image-container">
            <img src="assets/img/logo.png" alt="Imagen de inicio">
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Sistema de Gestión de Líquidos - Todos los derechos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
