
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script type="text/javascript" src="exer3.js"></script>
</head>
<body>

<h2>Manipulação de Arquivos</h2>
<p>Nesta aula trataremos como manipular arquivos com PHP</p>


<header>
  <h2>Exemplo #1</h2>
  <h3>Simula Calculadora</h3>
</header>

<section>
  <nav>
    <ul>
      <li><a href="exemplo1.php">Calculadora</a></li>
      <li><a href="">Mostra Conteúdo do Diretorio</a></li>
      <li><a href="">Verifica Existência de  Arquivo</a></li>
      <li><a href="">Escrever no arquivo</a></li>
      <li><a href="">Excluir Arquivo</a></li>
      <li><a href="">Lendo Conteúdo</a></li>
	  <li><a href="">Upload de Arquivo</a></li>
       <li><a href="index.php">Retorna ao Menu principal</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Veja aqui o resultado </h1>
 <?php
/*---------------------------------------------------------------------*
 *                  exemplo #1 : Mostra o caminho Atual             *
 *---------------------------------------------------------------------*/  
echo ("Caminho Atual Recuperado pelo comando PHP: ". getcwd());
?>
   <h2> Digite os números: </h2>
<p>
<?php $varialX=1234; ?>
<input type="number" name="numberx" id="tnx" value ="xxxxxxxxxx">
<p>
<input type="number" name="number1" id="tn1">
<input type="number" name="number2" id="tn2">
</p>
<br>
<h2> Qual operação deseja? </h2>
<p>
<input type="button" value="Somar" onclick="somar()">
<input type="button" value="Subtrair" onclick="subtrair()">
<input type="button" value="Multiplicar" onclick="multiplicar()">
<input type="button" value="Dividir" onclick="dividir()">
</p>
</div>
<div id="resultado">
<br>
<h2> Resultado: </h2>
<p id="res"></p>
</div>

  </article>
</section>

<footer>
  <p>Elementos Básicos de PHP</p>
</footer>

</body>
</html>
