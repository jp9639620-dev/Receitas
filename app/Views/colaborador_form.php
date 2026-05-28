<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Colaborador - ProtecEPI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('public/css/principal.css') ?>">
</head>
<body>
<div class="d-flex">
  <div class="sidebar" style="width: 250px;">
    <div class="logo">
      <img src="<?= base_url('public/imagem/EPI.png') ?>" alt="Logo protecEPI">
      <span>ProtecEPI</span>
    </div>
    <a href="<?= base_url('home/principal') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-home"></i> Dashboard
    </a>
    <a href="<?= base_url('colaboradores') ?>" class="sidebar-item active" style="text-decoration: none; color: inherit;">
      <i class="fas fa-users"></i> Colaboradores
    </a>
    <a href="<?= base_url('epis') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-shield-alt"></i> EPIs
    </a>
    <a href="<?= base_url('entregas') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-box"></i> Entregas
    </a>
  </div>

  <div class="flex-grow-1">
    <div class="header-top">
      <div><i class="fas fa-bell"></i></div>
      <div>
        <span class="badge bg-warning text-dark">MS</span>
        <strong> Maria Santos</strong><br>
        <small>Administrador</small>
      </div>
    </div>

    <div class="main-content">
      <div class="page-header">
        <?= isset($usuario) ? 'Editar Colaborador' : 'Novo Colaborador' ?>
      </div>

      <div class="table-container">
        <form action="<?= isset($usuario) ? base_url('home/atualizar') : base_url('colaborador/salvar') ?>" method="post">
          <?php if (isset($usuario)): ?>
            <input type="hidden" name="id" value="<?= esc($usuario['id']) ?>">
          <?php endif; ?>

          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= isset($usuario) ? esc($usuario['nome']) : '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= isset($usuario) ? esc($usuario['email']) : '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="text" name="senha" class="form-control" value="<?= isset($usuario) ? esc($usuario['senha']) : '' ?>" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Data de Criação</label>
              <input type="date" name="data_criacao" class="form-control" value="<?= isset($usuario) ? esc($usuario['data_criacao']) : '' ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Hora de Criação</label>
              <input type="time" name="hora_criacao" class="form-control" value="<?= isset($usuario) ? esc($usuario['hora_criacao']) : '' ?>" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
          <a href="<?= base_url('colaboradores') ?>" class="btn btn-secondary ms-2">Cancelar</a>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>