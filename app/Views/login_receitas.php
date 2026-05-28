<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Receitas</title>
    <link rel="stylesheet" href="<?= base_url('css/login_receitas.css') ?>">
</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <form method="POST" action="<?= base_url('home/autenticar_receita') ?>" class="login-form">
                <div class="logo-section">
                    <div class="logo-icon">🍳</div>
                    <h1>Receitas</h1>
                </div>

                <p class="subtitle">Bem-vindo ao Sistema de Receitas</p>

                <div class="form-group">
                    <input 
                        type="text" 
                        name="usuario" 
                        id="usuario"
                        placeholder="Usuário" 
                        required
                        autocomplete="username"
                    >
                </div>

                <div class="form-group">
                    <input 
                        type="password" 
                        name="senha" 
                        id="senha"
                        placeholder="Senha" 
                        required
                        autocomplete="current-password"
                    >
                </div>

                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Lembrar-me</span>
                    </label>
                    <a href="#" class="forgot-password">Esqueceu a senha?</a>
                </div>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="error-message">
                        <span>⚠️</span>
                        <p><?= session()->getFlashdata('error') ?></p>
                    </div>
                <?php endif; ?>

                <button type="submit" class="btn-login">Acessar Sistema</button>

                <div class="footer-text">
                    <p>Não tem acesso? <a href="#">Contacte o administrador</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
