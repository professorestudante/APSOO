<?php require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Hospede.class.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Home</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
</head>

<body>

<div id="wrapper">
	<header id="header">
		<br><br>
		<h1 align="center">M&amp;M Hotel</h1>
	</header><!-- #header-->

	<section id="middle">
	<div id="container">
			<div id="content">
		<?php if(isset($_GET['nome'])){?>
				<?php $c = new Hospede();
					$all = null;
					  $all = $c->selectByName($_GET['nome']); 
					  ?>
					  <?php if ($all != null) {?>
					  <table border="1">
					  <tr> <td> Nome </td> <td> Quarto </td> </tr>
				<?php foreach ($all as $row){?>
				<tr>
					<td>
						<?php echo $row['nome']; ?>	
					</td>
					<td>
						<?php echo $row['quarto']; ?>	
					</td>
				</tr>
					
				<?php  }?>
					</table>
					<?php }else{ echo "Nenhum hospede que contenha ".$_GET['nome']." est� hospedado no momento";}?>
		<?php }else{?>
		
				<form action="/Hotel/view/consultas/PesquisaHospede.php" method="get">
				<input name="nome" type="text">
				<input type="submit" value="Pesquisar">
				</form>
				<?php }?>
				
				</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideLeft">
			<strong>
			<a href="/Hotel/view/index.php">Voltar</a>
			<br>
			<a href="/Hotel/view/consultas/Ocupacao.php">Ocupa&ccedil;&atilde;o</a>
			<br>
			<a href="/Hotel/view/consultas/Faturamento.php">Faturamento</a>
			<br>
			<a href="/Hotel/view/consultas/PesquisaHospede.php">Pesquisar Hospede</a>
			<br>
			<a href="/Hotel/view/consultas/FaturamentoServicos.php">Faturamento por servico</a>
			<br>
			</strong> 
			</aside><!-- #sideLeft -->

	</section><!-- #middle-->

	<footer id="footer">
		Marcelo e Mauricio &copy;
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>