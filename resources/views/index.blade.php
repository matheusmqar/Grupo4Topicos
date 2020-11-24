<!DOCTYPE html>
<html>
<head>
	<title>Materiais para Manutenção</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<style>
.gradiente{
    background: linear-gradient(to right, #7952B3, #4f3675);
  }

  .gradiente2{
    background: linear-gradient(to right, #4f3675, #7952B3);
  }

  #wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light gradiente2">
  <a class="navbar-brand" href="/" style="color: white">Materiais para construção</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <div id="page-content-wrapper" >
        <button class="btn btn-primary" id="menu-toggle" style="background-color:  #7952B3"><i class="fas fa-bars"></i></button>
      </div>
    </ul>
  </div>
</nav>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> Projeto  </div>
      <div class="list-group list-group-flush">
        <a href="/fornecedor" class="list-group-item list-group-item-action bg-light">Lista</a>
        <a href="/pedido" class="list-group-item list-group-item-action bg-light">Pedidos</a>
        <a href="/fornecedor" class="list-group-item list-group-item-action bg-light">Fornecedores</a>
        <a href="/material" class="list-group-item list-group-item-action bg-light">Materiais</a>
        <div class="sidebar-heading"> Etc.  </div>
        <a href="https://github.com/matheusmqar/Grupo4Topicos" class="list-group-item list-group-item-action bg-light">Github</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Sobre nós</a> <hr>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->


      <div class="container-fluid">
        <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <img src="https://uploaddeimagens.com.br/images/002/967/550/full/metalurgica.png?1605683913">
        </div>
        <div class="col-md-12 mx-auto">
                    <div class="row" style="margin-left: 10%">
              <!--
              <div class="col-3">
                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/fornecedor'"; style="background-color:  #7952B3"> Lista</button>  
                </div>
                        <div class="col-2 " >
                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/pedido'"; style="background-color:  #7952B3">Pedidos</button>
              </div>
-->
              <div class="card" style="width: 18rem; margin: 5px;">
                <img src="https://uploaddeimagens.com.br/images/002/976/972/full/fornecedor-lust.jpg?1606207607"  style="border: 1px solid #7952B3;" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title" style="color: black">Fornecedores</h5>
                  <a href="/fornecedor" class="btn btn-primary" style="background-color:  #7952B3" >Ir para lá</a>
              </div>
            </div>
            <div class="card" style="width: 18rem; margin: 5px;">
              <img src="https://uploaddeimagens.com.br/images/002/976/969/full/principais-gargalos-operacionais-da-industria-1.jpg?1606206744" style="border: 1px solid #7952B3;" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title" style="color:  black">Materiais</h5>
                <a href="/material" class="btn btn-primary" style="background-color:  #7952B3" >Acessar</a>
              </div>
            </div>
            <div class="card" style="width: 18rem; margin: 5px;">
              <img src="https://uploaddeimagens.com.br/images/002/976/971/full/pedidos-box-ilust.jpg?1606207407"  style="border: 1px solid #7952B3;"  class="card-img-top" alt="...">
              <div class="card-body" >
                <h5 class="card-title" style="color: black">Pedidos</h5>
                <a href="/pedido" class="btn btn-primary" style="background-color:  #7952B3" >Solicitar</a>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </header>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<br/>






<!-- Footer -->
<br/>
<footer class="page-footer font-small fixed-bottom gradiente"  style="background-color: #F8F9FA" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white">© 2020 Copyright:
    <a href="https://fatecpg.edu.br" style="color: white"> FATEC PG</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>