
<!-- Inicio del NAVBAR -->
  <!-- Ver clases de boostrap para hacer un navbar https://getbootstrap.com/docs/4.0/components/navbar/#how-it-works -->
<nav class="navbar navbar-expand-lg  navbar-dark text-center">
  <!-- <a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Inicio<span class=""></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/somos">¿Quiénes Somos?</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="mouseProd()">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <a class="dropdown-item" href="/productos/Caja" onmouseover="mouseSub('sub1','sub2')">Cajas</a>
         <div style="margin-left: 15px; display: none" id="sub1">
           <a class="dropdown-item" href="/productos/Caja/liso">Liso</a>
           <a class="dropdown-item" href="/productos/Caja/estampado">Estampado</a>
         </div>

         <a class="dropdown-item" href="/productos/Bolsa" onmouseover="mouseSub('sub2','sub1')">Bolsas</a>
         <div style="margin-left: 15px; display: none" id="sub2">
             <a class="dropdown-item" href="/productos/Bolsa/Grande">Grande</a>
             <a class="dropdown-item" href="/productos/Bolsa/Chica">Chica</a>
         </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/productos">Todos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/faq">Preguntas frecuentes</a>
      </li>
    </ul>
  </div>
  <script>
    window.onload = function() {
      if (window.innerWidth < 992) {
        document.getElementById('sub1').style.display = 'block';
        document.getElementById('sub2').style.display = 'block';
      }
    }
    function mouseSub(divUno, divDos){
      if (window.innerWidth > 991) {
        document.getElementById(divUno).style.display = 'block';
        document.getElementById(divDos).style.display = 'none';
      }
    }
    function mouseProd(){
      if (window.innerWidth > 991) {
        document.getElementById('sub1').style.display='none';
        document.getElementById('sub2').style.display='none';
      }
    }
  </script>
</nav>
<!-- Fin del NAVBAR -->
