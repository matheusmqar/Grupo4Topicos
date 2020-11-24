<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

	<!-- Bootstrap -->
	<!--<title>Materiais para Manutenção</title>-->
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
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light gradiente2">
  <a class="navbar-brand" href="/" style="color: white">Materiais para construção</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/fornecedor" style="color: white">Fornecedores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/material" style="color: white">Materiais</a>
      </li>
    </ul>
  </div>
</nav>

<br/>

</head>
<body>
	<!-- As views filhas incluem conteúdo aqui e no outro Arrobayield acima -->
	@yield('corpo')






<!-- Footer -->
<br/>
<footer class="page-footer font-small fixed-bottom gradiente" style="background-color: #F8F9FA" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white">© 2020 Copyright:
    <a href="https://fatecpg.edu.br" style="color: white"> FATEC PG</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>