<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Entregas - ProtecEPI</title>
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
    <a href="<?= base_url('colaboradores') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-users"></i> Colaboradores
    </a>
    <a href="<?= base_url('epis') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-shield-alt"></i> EPIs
    </a>
    <div class="sidebar-item active">
      <i class="fas fa-box"></i> Entregas
    </div>
  </div>
  <div class="flex-grow-1">
    <div class="header-top">
      <div><i class="fas fa-bell"></i></div>
      <div>
        <span class="badge bg-warning text-dark">PS</span>
        <strong> Usuario</strong><br>
        <small>Técnico de Segurança</small>
      </div>
    </div>
    <div class="main-content">
      <div class="dashboard-header">Entregas</div>
      <div class="card-section">
        <div class="section-title">Lista de Entregas</div>
        <p>Esta página ainda não está preenchida com dados reais. Aqui você pode adicionar a gestão de entregas do sistema.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>