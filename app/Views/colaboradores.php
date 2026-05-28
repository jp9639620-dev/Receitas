<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Gestão de Colaboradores - ProtecEPI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('public/css/principal.css') ?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar" style="width: 250px;">
    <div class="logo">
      <img src="<?= base_url('public/imagem/EPI.png') ?>" alt="Logo protecEPI">
      <span>ProtecEPI</span>
    </div>
    <a href="<?= base_url('home/principal') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-home"></i> Dashboard
    </a>
    <div class="sidebar-item active">
      <i class="fas fa-users"></i> Colaboradores
    </div>
    <a href="<?= base_url('epis') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-shield-alt"></i> EPIs
    </a>
    <a href="<?= base_url('entregas') ?>" class="sidebar-item" style="text-decoration: none; color: inherit;">
      <i class="fas fa-box"></i> Entregas
    </a>
  </div>

  <!-- Main Content -->
  <div class="flex-grow-1">
    <!-- Header Top -->
    <div class="header-top">
      <div>
        <i class="fas fa-bell"></i>
      </div>
      <div>
        <span class="badge bg-warning text-dark">MS</span>
        <strong>Maria Santos</strong><br>
        <small>Administrador</small>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
      <!-- Page Header -->
      <div class="page-header">
        Gestão de Colaboradores
      </div>

      <!-- Table Section -->
      <div class="table-container">
        <div class="table-header">
          <div class="table-title">Colaboradores Cadastrados</div>
          <a href="<?= base_url('colaborador/novo') ?>" class="btn-novo">
            <i class="fas fa-plus"></i> Novo Colaborador
          </a>
        </div>

        <div class="search-box mb-4">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Buscar por nome, email ou data...">
        </div>

        <div style="overflow-x: auto;">
          <table>
            <thead>
              <tr>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>DATA</th>
                <th>HORA</th>
                <th>AÇÕES</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($colaboradores)): ?>
                <?php foreach ($colaboradores as $c): ?>
                  <tr>
                    <td class="td-name"><?= esc($c['nome']) ?></td>
                    <td class="td-cpf"><?= esc($c['email']) ?></td>
                    <td class="td-cargo"><?= esc($c['senha']) ?></td>
                    <td><?= esc($c['data_criacao']) ?></td>
                    <td><?= esc($c['hora_criacao']) ?></td>
                    <td class="td-actions">
                      <a href="<?= base_url('home/editar/'.$c['id']) ?>" class="btn-action btn-edit" title="Editar">
                        <i class="fas fa-pen"></i>
                      </a>
                      <a href="<?= base_url('home/excluir/'.$c['id']) ?>" class="btn-action btn-delete" title="Deletar" onclick="return confirm('Deseja excluir este colaborador?');">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6" class="text-center">Nenhum colaborador cadastrado.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
