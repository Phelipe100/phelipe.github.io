<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PACH - Coordenação de Ensino e Promoção Social</title>
  <!-- Importando CSS de CDNs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-icon {
      font-size: 3rem;
      color: #007bff;
    }
    .card {
      margin: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    .card-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .footer {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
      width: 100%;
    }
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 20px;
    }
    body {
      padding-top: 20px;
    }
    .logo {
      width: 150px;
      margin-bottom: 20px;
      display: block; 
      margin-left: auto; 
      margin-right: auto;
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      if (window.innerWidth <= 768) {
        window.location.href = "mobile.php";
      }
    });
  </script>
</head>
<body class="hold-transition">
  <div class="container">
    <img src="img/logo-dpp.png" alt="Logo DPP" class="logo">
    <h3 class="text-center mb-4">Coordenação de Ensino e Promoção Social - PACH</h3>
    <div class="row card-container">
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-user card-icon"></i>
            <h5 class="card-title mt-3">Regras Carteira de Visitação</h5>
            <p class="card-text">Saiba mais sobre as regras da carteira de visitação da unidade.</p>
            <button class="btn btn-primary" onclick="window.open('https://docs.google.com/document/d/1BbbN5hQ2FO_5BqPCk3vaSYExPWTi4YWhknTozCmquxo', '_blank')">
              <i class="fas fa-file-alt"></i> Ver Regras de Carteirinhas
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-female card-icon"></i>
            <h5 class="card-title mt-3">Regras de Vestimentas Permitidas</h5>
            <p class="card-text">Saiba mais sobre as regras de vestimentas da unidade.</p>
            <button class="btn btn-danger" onclick="window.open('https://docs.google.com/document/d/1qXeQPP_BV7-JIfgto8aO-EQl66uPkjdiCVeCgYR9AEQ', '_blank')">
              <i class="fas fa-file-alt"></i> Ver Regras de Vestimentas
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-info-circle card-icon"></i>
            <h5 class="card-title mt-3">Regras de Visitação</h5>
            <p class="card-text">Saiba mais sobre as regras de visitação.</p>
            <button class="btn btn-info" onclick="window.open('https://docs.google.com/document/d/1SIlZ_QLQJefJkNp4p9ptIpSEoIjNehGP9kYW_8tWkD8', '_blank')">
              <i class="fas fa-info-circle"></i> Ver Regras de Visitação
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-envelope-open-text card-icon"></i>
            <h5 class="card-title mt-3">Regras de Cartas</h5>
            <p class="card-text">Saiba mais sobre as regras de cartas.</p>
            <button class="btn btn-warning" onclick="window.open('https://docs.google.com/document/d/1zJdW_Kk7AOi_4W1xi2vlLOMC7ezdBG5ilTC-VxmrEDU', '_blank')">
              <i class="fas fa-envelope-open-text"></i> Ver Regras de Cartas
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-book card-icon"></i>
            <h5 class="card-title mt-3">Regras Auxílio Reclusão</h5>
            <p class="card-text">Saiba mais sobre Requerimento para receber o auxílio reclusão.</p>
            <button class="btn btn-secondary" onclick="window.open('https://docs.google.com/document/d/1RHogrnvTVnazFd-PZjoqpZoqhQ_nZ-0ownf4U71E89g', '_blank')">
              <i class="fas fa-book"></i> Ver Regras Auxílio Reclusão
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-book card-icon"></i>
            <h5 class="card-title mt-3">Formulário de Requerimento para Carteiras de Visita</h5>
            <p class="card-text">Saiba mais sobre Requerimento para Carteiras de Visita - PACH.</p>
            <button class="btn btn-secondary" onclick="window.open('https://forms.gle/HeiBRMtR7R2AF2Ys7', '_blank')">
              <i class="fas fa-book"></i> Ver Formulário de Requerimento
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-comments card-icon"></i>
            <h5 class="card-title mt-3">WhatsApp Agendamento de Visitas</h5>
            <p class="card-text">Clique para redirecionar para o WhatsApp. (Somente Mensagem de Texto)</p>
            <button class="btn btn-success" onclick="window.open('https://wa.me/5548991680083', '_blank')">
              <i class="fas fa-mobile"></i> Abrir WhatsApp
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-comments card-icon"></i>
            <h5 class="card-title mt-3">WhatsApp Setor Social</h5>
            <p class="card-text">Clique para redirecionar para o WhatsApp. (Somente Mensagem de Texto)</p>
            <button class="btn btn-success" onclick="window.open('https://wa.me/554920499785', '_blank')">
              <i class="fas fa-mobile"></i> Abrir WhatsApp
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4">
          <div class="card-body">
            <i class="fas fa-comments card-icon"></i>
            <h5 class="card-title mt-3">Telefones Úteis</h5>
            <p class="card-text">Clique para redirecionar aos telefones úteis da unidade.</p>
            <button class="btn btn-success" onclick="window.open('https://docs.google.com/document/d/118yL8xIIwz0AdQe9gSSGCoVY_5BvaksqJP3o2R0fHTY', '_blank')">
              <i class="fas fa-mobile"></i> Ver Telefones
            </button>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Footer -->
<footer class="footer">
  <strong>Desenvolvido por <a href="#">Coordenação de Ensino e Promoção Social - PACH</a>.</strong> Todos os direitos reservados.
  <div class="float-right d-none d-sm-inline">
    <b>Versão</b> 2025.0.1
  </div>
</footer>
</div>
<!-- ./wrapper -->
<!-- Importando Scripts de CDNs -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
