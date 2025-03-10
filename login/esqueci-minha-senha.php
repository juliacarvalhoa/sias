<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f8f9fa;">
    <div class="text-center w-50">
        <form action="processa_login.php" method="POST" class="bg-white p-4 rounded shadow w-100">
            <div class="mb-3 text-start"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                <label for="username" class="form-label"><b>Informe seu CPF</b></label>
                <input type="email" class="form-control form-control-lg w-100" id="username" name="username" required>
                <p for="MsgUsername" class="form-label">Enviaremos um link para alteração da senha no seu e-mail informado no cadastro!</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-secondary" type="submit"><b>ENVIAR</b></button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
