<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"/>

    <title>Proyecto Tramo 2</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!--Aca va la barra de navegacion-->
    <nav
      class="navbar navbar-expand-lg"
      style="background-color: #00a800"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <div>
          <a class="navbar-brand" href="#">
            <img src="assets/img/Logo-1.png" height="50" />
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Principal</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Ingresar</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Más info
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">¿Quienes sómos?</a></li>
                <li>
                  <a class="dropdown-item" href="#">Acerca de nosotros</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Contactá con nosotros</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!--Fin de barra-->
    <footer class="text-white py-4 pt-4 mt-auto" style="background-color: #00a800">

    <div class="container">  
    <div class="row">
        <div class="col text-center">
          <p class="mb-1">Todos los derechos reservados &copy; 2025</p>
          <p class="mb-0">Desarrollado por: Quintana Ricardo José Antonio :)</p>
        </div>
      </div>
      </div>
    </footer>
        <!--Codigo para java script-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>