<?php
session_start();

// Forçar HSTS (apenas se estiver usando HTTPS)
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
}
?><!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Carlito's Locações</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .panel-card {
      transition: transform .15s ease, box-shadow .15s ease;
      border: none;
      border-radius: 1rem;
    }
    .panel-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,.08);
    }
    .panel-icon {
      font-size: 3rem;
      line-height: 1;
    }
    .icon-stack {
      position: relative;
      display: inline-block;
    }
    .icon-badge {
      position: absolute;
      right: -6px;
      bottom: -6px;
      font-size: 1.25rem;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-4">
  <h1 class="mb-4">Painel Carlito's Locações</h1>

  <!-- Seção Barcos -->
  <h2 class="h4 mb-3">🚤 Barcos</h2>
  <div class="row g-3">
      <!-- Cadastro Barcos -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/site3/cadastro_produto/cadastro_barcos.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-file-earmark-spreadsheet panel-icon text-danger mb-2"></i>
      <h6>Cadastro de Barcos</h6>
      <p class="text-muted">Cadastro de Embarcações</p>
    </div>
  </a>
</div>

    <!-- Manutenção -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/barcos_manutencao.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-tools panel-icon text-primary mb-2"></i>
          <h6>Manutenção ou Locação</h6>
          <p class="text-muted">Gerenciar manutenção ou locação dos barcos</p>
        </div>
      </a>
    </div>
    <!-- Disponíveis -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/barcos_disponiveis.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <span class="icon-stack mb-2">
            <i class="bi bi-boat panel-icon text-success"></i>
            <i class="bi bi-check-circle-fill icon-badge text-success"></i>
          </span>
          <h6>Disponíveis</h6>
          <p class="text-muted">Lista de barcos disponíveis</p>
        </div>
      </a>
    </div>
    <!-- Autenticar -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/autenticar_token_barcos.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-shield-lock panel-icon text-warning mb-2"></i>
          <h6>Autenticar</h6>
          <p class="text-muted">Autenticação de liberação/envio do barco para locação/manutenção</p>
        </div>
      </a>
    </div>
    <!-- Devolução -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/tokens_retirada.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-box-arrow-in-left panel-icon text-danger mb-2"></i>
          <h6>Devolução</h6>
          <p class="text-muted">Devolver barcos</p>
        </div>
      </a>
    </div>
    <!-- Situação -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/lista_barcos_manutencao.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-list-check panel-icon text-info mb-2"></i>
          <h6>Situação</h6>
          <p class="text-muted">Status dos barcos</p>
        </div>
      </a>
    </div>
    <!-- Níveis de Óleo -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/oil/controle_oleo.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-droplet-half panel-icon text-primary mb-2"></i>
          <h6>Níveis de Óleo</h6>
          <p class="text-muted">Controle dos níveis de óleo dos barcos</p>
        </div>
      </a>
    </div>
    <!-- CSV: Níveis de Óleo -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/oil/controle_oleo_csv.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-file-earmark-spreadsheet panel-icon text-success mb-2"></i>
          <h6>CSV: Níveis de Óleo</h6>
          <p class="text-muted">Exportar níveis de óleo em CSV</p>
        </div>
      </a>
    </div>
  </div>

  <!-- Seção Tratores -->
  <h2 class="h4 mt-5 mb-3">🚜 Tratores</h2>
  <div class="row g-3">
    <!-- Página principal -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/locason.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-building panel-icon text-primary mb-2"></i>
          <h6>Carlito's Locações</h6>
          <p class="text-muted">Página principal</p>
        </div>
      </a>
    </div>
    <!-- Situação -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/todas_reserva_pix_quarto.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-list-task panel-icon text-success mb-2"></i>
          <h6>Situação</h6>
          <p class="text-muted">Status dos tratores</p>
        </div>
      </a>
    </div>
    <!-- Autenticar -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/solicitanto_assinatura.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-shield-lock panel-icon text-warning mb-2"></i>
          <h6>Autenticar</h6>
          <p class="text-muted">Autenticação de liberação do trator</p>
        </div>
      </a>
    </div>
    <!-- Devolução -->
    <div class="col-6 col-md-4 col-lg-3">
      <a href="https://carlitoslocacoes.com/site/devolucao_trator.php" class="text-decoration-none">
        <div class="card panel-card h-100 p-3">
          <i class="bi bi-box-arrow-in-left panel-icon text-danger mb-2"></i>
          <h6>Devolução</h6>
          <p class="text-muted">Devolver tratores</p>
        </div>
      </a>
    </div>
  </div>

 <!-- Seção Identificação -->
<h2 class="h4 mt-5 mb-3">🆔 Identificação</h2>
<div class="row g-3">
  <!-- Identificação -->
  <div class="col-6 col-md-4 col-lg-3">
    <a href="https://carlitoslocacoes.com/farolqr/site/identificacao_farolqr.php" class="text-decoration-none">
      <div class="card panel-card h-100 p-3">
        <i class="bi bi-person-badge-fill panel-icon text-primary mb-2"></i>
        <h6>Identificação</h6>
        <p class="text-muted">Informações de identificação FarolQR</p>
      </div>
    </a>
  </div>

<!-- Atendimento -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/site/reserva_pendente_barcos.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-headset panel-icon text-success mb-2"></i>
      <h6>Atendimento</h6>
      <p class="text-muted">Gerenciar reservas pendentes de barcos</p>
    </div>
  </a>
</div>

<!-- Consulta Telefone -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/consulta_telefone.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-telephone panel-icon text-primary mb-2"></i>
      <h6>Consulta Telefone</h6>
      <p class="text-muted">Pesquisar telefone pelo usuário</p>
    </div>
  </a>
</div>
<!-- Dashboard Painel -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/dashboard_painel.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-speedometer2 panel-icon text-success mb-2"></i>
      <h6>Pagamentos Dashboard</h6>
      <p class="text-muted">Acompanhar indicadores e gráficos</p>
    </div>
  </a>
</div>
<!-- Relatório -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/opentowork/relatorios.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-bar-chart-line panel-icon text-info mb-2"></i>
      <h6>Relatório</h6>
      <p class="text-muted">Visualizar relatórios diário, semanal e mensal</p>
    </div>
  </a>
</div>

<!-- Banco de Transações -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/farolqr/site/balance_transacao.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-bank panel-icon text-warning mb-2"></i>
      <h6>Banco</h6>
      <p class="text-muted">Consultar saldo e movimentações</p>
    </div>
  </a>
</div>

<!-- Logout -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/farolqr/site/logout.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-box-arrow-right panel-icon text-danger mb-2"></i>
      <h6>Logout</h6>
      <p class="text-muted">Encerrar sessão e sair do painel</p>
    </div>
  </a>
</div>
<!-- Adquira Aura -->
<div class="col-6 col-md-4 col-lg-3">
  <a href="https://carlitoslocacoes.com/index.php" class="text-decoration-none">
    <div class="card panel-card h-100 p-3">
      <i class="bi bi-star-fill panel-icon text-warning mb-2"></i>
      <h6>Adquira Aura</h6>
      <p class="text-muted">Comprar Aura e acessar benefícios exclusivos</p>
    </div>
  </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
