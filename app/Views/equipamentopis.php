<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EPIs</title>

    <link rel="stylesheet" href="<?= base_url('public/css/login_EPIs.css') ?>">
    <script src="<?= base_url('public/js/script_login.js') ?>" defer></script>
</head>

<body>

<div class="container">
    <div class="left"></div>

    <div class="right">
        <form action="<?= base_url('home/autenticar') ?>" method="post">
            <div class="logo">
                <img src="<?= base_url('public/imagem/EPI.png') ?>" alt="Logo protecEPI">
                <h1>Protec<span class="epi">EPI</span></h1>
            </div>

            <label for="usuario"><b>Email</b></label>
            <div class="senha">
                <input type="email" id="usuario" name="usuario" placeholder="seu@email.com" required>
            </div>

            <label for="senha"><b>Senha</b></label>
            <div class="senha">
                <input id="senha" type="password" name="senha" placeholder="Sua senha" required>
                <img src="<?= base_url('public/imagem/olho.png') ?>" id="icon" onclick="verOcultarSenha()">
            </div>

            <button type="submit">Entrar</button>
        </form>
    </div>
</div>

</body>
</html>


