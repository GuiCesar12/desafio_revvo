<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel Responsivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand me-auto fw-bold" href="#">Revvo</a> <!-- Alinhado à esquerda -->
      <div class="d-flex align-items-center ms-auto">
        <input class="form-control me-3 w-auto" type="search" placeholder="Pesquisar..." aria-label="Search">
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user me-2"></i>
            <?= $this->e($title) ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <!-- Carrossel -->
  <div class="container-fluid px-25">
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/img/slide1.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
              <img src="assets/img/slide2.png" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
              <img src="assets/img/slide3.png" class="d-block w-100" alt="Slide 3">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>

  <!-- Lista de Cursos -->
  <div class="container mt-4 courses-section">
    <h3 class="fw-bold">MEUS CURSOS</h3><br>
    <div class="row g-3">
        <!-- Curso 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="course-card">
                <img src="assets/img/curso.jpg" alt="Curso">
                <div class="title">PELLENTESQUE MALESUADA</div>
                <div class="description">Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue.</div>
                <button class="btn">VER CURSO</button>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="course-card">
                <img src="assets/img/curso.jpg" alt="Curso">
                <div class="title">PELLENTESQUE MALESUADA</div>
                <div class="description">Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue.</div>
                <button class="btn">VER CURSO</button>
            </div>
        </div>

        <!-- Curso 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="course-card">
                <img src="assets/img/curso.jpg" alt="Curso">
                <div class="title">PELLENTESQUE MALESUADA</div>
                <div class="description">Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue.</div>
                <button class="btn">VER CURSO</button>
            </div>
        </div>

        <!-- Curso 4 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="course-card">
                <img src="assets/img/curso.jpg" alt="Curso">
                <div class="title">PELLENTESQUE MALESUADA</div>
                <div class="description">Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue.</div>
                <button class="btn">VER CURSO</button>
            </div>
        </div>

        <!-- Botão "Adicionar Curso" -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="add-course">
                <i class="fa-solid fa-laptop-code"></i>
                <p>ADICIONAR CURSO</p>
            </div>
        </div>
    </div>
  </div>
  <!-- Rodapé -->
  <footer class="bg-light text-center text-lg-start mt-4">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Sobre Nós</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links Úteis</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#!" class="text-dark">Link 1</a></li>
            <li><a href="#!" class="text-dark">Link 2</a></li>
            <li><a href="#!" class="text-dark">Link 3</a></li>
            <li><a href="#!" class="text-dark">Link 4</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contato</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#!" class="text-dark">Email: contato@revvo.com</a></li>
            <li><a href="#!" class="text-dark">Telefone: (11) 1234-5678</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
      © 2023 Revvo. Todos os direitos reservados.
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
