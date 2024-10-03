<?php
    include __DIR__ . '/../config/database.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Usuário</h2>
        <form class="row g-3" method="POST" action="insert_usuario.php">
            <!-- Nome e Sobrenome -->
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-4">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="col-md-2">
                <label for="sexo" class="form-label">Sexo</label>
                <select id="sexo" class="form-select" name="sexo">
                    <option selected>Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <!-- E-mail e Confirmação -->
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="confirma-email" class="form-label">Confirme o e-mail</label>
                <input type="email" class="form-control" id="confirma-email" required>
            </div>

            <!-- Número de celular, WhatsApp, CPF e Data de Nascimento -->
            <div class="col-md-1">
                <label for="celularDDI" class="form-label">DDI</label>
                <input type="tel" class="form-control" id="celularDDI" name="celularDDI" placeholder="+55">
            </div>
            <div class="col-md-1">
                <label for="celularDDD" class="form-label">DDD</label>
                <input type="tel" class="form-control" id="celularDDD" name="celularDDD" placeholder="(00)">
            </div> 
            <div class="col-md-2">
                <label for="celularNum" class="form-label">N° Celular</label>
                <input type="tel" class="form-control" id="celularNum" name="celularNum" placeholder="9-9999-9999">
            </div>                           
            <div class="col-md-2">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <select id="whatsapp" class="form-select" name="whatsapp">
                    <option selected>Sim</option>
                    <option>Não</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="col-md-3">
                <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data-nascimento" name="data-nascimento" required>
            </div>

            <!-- CEP e Cidade -->
            <div class="col-md-2">
                <label for="cep" class="form-label">CEP</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cep" name="cep" required>
                </div>
            </div>
            <div class="col-md-2">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="col-md-1">
                <label for="uf" class="form-label">UF</label>
                <select id="uf" class="form-select" name="uf">
                    <option selected>UF</option>
                    <option>SP</option>
                    <option>RJ</option>
                    <!-- Adicionar outras opções conforme necessário -->
                </select>
            </div>

            <!-- Logradouro e Número -->
            <div class="col-md-2">
                <label for="tipo-logradouro" class="form-label">Tipo Logradouro</label>
                <select id="tipo-logradouro" class="form-select" name="tipo-logradouro">
                    <option selected>Rua</option>
                    <option>Avenida</option>
                    <option>Travessa</option>
                    <!-- Adicionar outras opções -->
                </select>
            </div>
            <div class="col-md-3">
                <label for="logradouro" class="form-label">Nome Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" required>
            </div>
            <div class="col-md-1">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>

            <!-- Complemento -->
            <div class="col-md-1">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento">
            </div>

            <!-- Senha e Confirmação -->
            <div class="col-md-4">
                <label for="senha" class="form-label">Crie uma senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="col-md-4">
                <label for="confirma-senha" class="form-label">Confirme a senha</label>
                <input type="password" class="form-control" id="confirma-senha" required>
            </div>

            <!-- Termos e Condições -->
            <div class="col-md-4 form-check">
                <br>
                <input class="form-check-input" type="checkbox" id="termos" required>
                <label class="form-check-label" for="termos">
                    Eu aceito os termos e condições, e confirmo que li e entendi a política de privacidade.
                </label>
            </div>

            <!-- Botão de Cadastro -->
            <div class="col-12">
                <button type="submit" class="btn btn-secondary w-100">Cadastrar-se</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
