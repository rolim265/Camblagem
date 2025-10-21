<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CABLAGEM - Navbar Animada</title>

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- CSS Custom -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!-- =======================
       NAVBAR
  ======================== -->
  <?php include 'navbar.html'; ?>

  <!-- =======================
       HERO
  ======================== -->
  <section class="hero-section">
    <img src="../img/brn.png" alt="Imagem de cabeamento" class="hero-image">
    <div class="hero-text">
      <h1>Solução Completa em Cabeamentos Para Sua Residência ou Empreendimento</h1>
      <p>Somos especialistas em cabeamento e infraestrutura, prontos para executar sua obra ou melhoria com agilidade, qualidade e eficiência.</p>
      <a href="https://wa.me/5511944591328?text=Oi%20Bruno%2C%20tudo%20bem%3F%20Estava%20vendo%20seu%20Instagram%20e%20seu%20site%2C%20e%20tenho%20interesse%20em%20seu%20servi%C3%A7o.%20Poderia%20me%20dar%20mais%20informa%C3%A7%C3%B5es%3F" class="hero-btn">WhatsApp</a>
    </div>
  </section>

  <!-- =======================
       MODELO / FEATURES
  ======================== -->
  <section class="features">
    <div class="feature">
      <i class="fas fa-desktop feature-icon"></i>
      <p class="feature-subtitle">Subtítulo</p>
      <h3 class="feature-title">Título</h3>
      <p class="feature-text">
        Lorem ipsum dolor sit amet. Quo maiores illum ut dolor assumenda vel ratione voluptatem ut odio aperiam id nisi quisquam.
      </p>
    </div>

    <div class="feature">
      <i class="fas fa-bolt feature-icon"></i>
      <p class="feature-subtitle">Subtítulo</p>
      <h3 class="feature-title">Título</h3>
      <p class="feature-text">
        Lorem ipsum dolor sit amet. Quo maiores illum ut dolor assumenda vel ratione voluptatem ut odio aperiam id nisi quisquam.
      </p>
    </div>

    <div class="feature">
      <i class="fas fa-sliders-h feature-icon"></i>
      <p class="feature-subtitle">Subtítulo</p>
      <h3 class="feature-title">Título</h3>
      <p class="feature-text">
        Lorem ipsum dolor sit amet. Quo maiores illum ut dolor assumenda vel ratione voluptatem ut odio aperiam id nisi quisquam.
      </p>
    </div>
  </section>

  <section id="sobre" >
  <div class="sobre-container">
    <div class="s">
      <h1>" Quem Somos</h1>
      <p>
        Somos uma empresa especializada em soluções elétricas, automação, tecnologia, segurança e sistemas de CFTV.
        Fundada em dezembro de 2024 por <strong>Bruno Lopes</strong> — técnico em Eletroeletrônica, com mais de quatro anos
        de experiência na área e futuro engenheiro elétrico —, nossa missão é oferecer serviços de alta qualidade,
        priorizando segurança, eficiência e inovação em cada projeto.
      </p>
      <p>
        Com uma equipe comprometida e foco na satisfação do cliente, buscamos constantemente aprimorar nossos processos
        e adotar as melhores práticas do mercado para garantir resultados confiáveis e duradouros.
      </p>
    </div>

    <div class="gif">
      <img src="../img/PERSONA01.png" alt="Animação de eletricista" />
    </div>
  </div>
</section>
  <!-- =======================
       CARROSSEL
  ======================== -->
  <section class="carousel">
    <div class="group">
      <div class="card">A</div>
      <div class="card">B</div>
      <div class="card">C</div>
    </div>
    <div class="group" aria-hidden="true">
      <div class="card">A</div>
      <div class="card">B</div>
      <div class="card">C</div>
    </div>
  </section>

  <!-- =======================
       FOOTER
  ======================== -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Logo e descrição -->
      <div class="footer-about">
        <img src="../img/logname.png" alt="Cablagem Logo" class="footer-logo">
        <h5>Com soluções completas e execução qualificada, a Cablagem é a escolha certa para quem busca confiança e resultados.</h5>
      </div>

      <!-- Localização -->
      <div class="footer-location">
        <i class="fas fa-map-marker-alt footer-icon"></i>
        <p>Estamos no ABC Paulista e sempre prontos<br>para atender onde você estiver.</p>
      </div>

      <!-- Links rápidos -->
      <div class="footer-links">
        <a href="#">Quem somos</a>
        <a href="#">Política de Privacidade</a>
        <a href="https://wa.me/5511944591328?text=Oi%20Bruno%2C%20tudo%20bem%3F%20Estava%20vendo%20seu%20Instagram%20e%20seu%20site%2C%20e%20tenho%20interesse%20em%20seu%20servi%C3%A7o.%20Poderia%20me%20dar%20mais%20informa%C3%A7%C3%B5es%3F" class="btn-contato">Contato</a>
      </div>

      <!-- Redes sociais -->
      <div class="footer-socials">
        <a href="https://wa.me/5511944591328?text=Oi%20Bruno%2C%20tudo%20bem%3F%20Estava%20vendo%20seu%20Instagram%20e%20seu%20site%2C%20e%20tenho%20interesse%20em%20seu%20servi%C3%A7o.%20Poderia%20me%20dar%20mais%20informa%C3%A7%C3%B5es%3F"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/cablagembr/"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 Cablagem - Todos os direitos reservados.</p>
    </div>
  </footer>

  <!-- =======================
       SCRIPTS
  ======================== -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/navbar.js"></script>

</body>


</html>