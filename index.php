<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kit-Dev-TPS</title>

	<link rel="stylesheet" type="text/css" href="bulma/css/bulma.min.css">

</head>
<body><!--
<div class="container">
	<div class="columns is-mobile is-tablet is-desktop">
	  <div class="column">1</div>
	  <div class="column">2</div>
	  <div class="column">3</div>
	  <div class="column">4</div>
	</div>
</div>-->



<section class="hero is-info is-large">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
          	<h1 class="title">kit-for-dev´s</h1>
            <!--<img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">-->
          </a>
          <span class="navbar-burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item">
              Inicio
            </a>
            <a class="navbar-item">
              Examples
            </a>
            <a class="navbar-item">
              Documentation
            </a>
            <span class="navbar-item">

            	<div class="dropdown">
							  <div class="dropdown-trigger">
							    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
							      <span>Click me</span>
							      <span class="icon is-small">
							        <i class="fas fa-angle-down" aria-hidden="true"></i>
							      </span>
							    </button>
							  </div>
							  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
							    <div class="dropdown-content">
							      <a href="#" class="dropdown-item">
							        Overview
							      </a>
							      <a href="#" class="dropdown-item">
							        Modifiers
							      </a>
							      <a href="#" class="dropdown-item">
							        Grid
							      </a>
							      <a href="#" class="dropdown-item">
							        Form
							      </a>
							      <a href="#" class="dropdown-item">
							        Elements
							      </a>
							      <a href="#" class="dropdown-item">
							        Components
							      </a>
							      <a href="#" class="dropdown-item">
							        Layout
							      </a>
							      <hr class="dropdown-divider">
							      <a href="#" class="dropdown-item">
							        More
							      </a>
							    </div>
							  </div>
							</div>

							<button class="js-modal-trigger" data-target="modal-js-example">registro</button>

            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="columns">
      	<div class="column is-5">
      		<h1 class="title">Acompañamiento para autodidactas</h1><br>
      		<h2 class="subtitle">contenido didactico,variado y sin rodeos para amantes del aprendizaje, desarrollo y dedicacion autonomos</h2>
      		<button class="button is-success is-outlined">Ver Contenido</button>
      	</div>
      	<div class="column is-5"></div>
      </div>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom 
  <div class="hero-foot">
    <nav class="tabs">
      <div class="container">
        <ul>
          <li class="is-active"><a>Overview</a></li>
          <li><a>Modifiers</a></li>
          <li><a>Grid</a></li>
          <li><a>Elements</a></li>
          <li><a>Components</a></li>
          <li><a>Layout</a></li>
        </ul>
      </div>
    </nav>
  </div>-->
</section>

	<style type="text/css">
		body{
			height: 1000px;
		}
		.hero{
			background-image: url(imgs/ambiente.jpg);
			position: relative;
			background-size: cover;
			background-position: center;
		}
		.hero::before{
			content: "";
			width: 100%;
			height: 100%;
			background: #000000;
			opacity: 0.7;
			position: absolute;	
		}
		.hero-body{
			position: relative;
		}

	</style>


<div class="modal" id="modal-js-example">
  <div class="modal-background is-primary"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Registro</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <div class="container">
      	<div class="field">
				  <label class="label">Correo</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input">
				  </div>
				</div>
				<div class="field">
				  <label class="label">Contraseña</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input">
				  </div>
				</div>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Registrarme</button>
      <button class="button">Cancelar</button>
    </footer>
  </div>
</div>

<script type="text/javascript" src="funciones.js"></script>
</body>
</html>