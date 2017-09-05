<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<style>
			.tabela{
				text-align : center;
				width : 100%
			}
			.titulo{
				background-color : gray
			}
			#titulos{
				color : black
			
			}
		</style>
	</head>
	<body>
		<h1 class="titulo">
			Promove Nutrição
		</h1>

		<h1>Meus Pacientes:</h1>
		<hr>

		<table class="tabela" border="1">
			<tr id="titulos">
				<td> 
					<b>Nome</b>
				</td>
				<td> 
					<b>Peso(kg)</b>
				</td>
				<td> 
					<b>Altura</b>
				</td>
				<td> 
					<b>IMC</b>
				</td>
				<td> 
					<b>Data de Nascimento</b>
				</td>
				<td> 
					<b>Idade</b>
				</td>
			</tr>
			<tr>
				<td> 
					John Petrucci
				</td>
				<td> 
					100
				</td>
				<td> 
					2.00
				</td>
				<td> 
					<?php
						$peso = 100;
						$alt = 2.00;
						$calc1 = $alt*$alt;
						$calc2 = $peso/$calc1;
						$result = $calc2;
						echo number_format ($resultado,2,',','.');
					?>
				</td>
				<td> 
					01/01/1980
				</td>
				<td> 
					<?php
						 $hoje = new DateTime("2017-09-05"); 
						 $nascimento = new DateTime("1980-01-01"); 
						 $intervalo = $hoje->diff($nascimento); 
						 echo $intervalo->format("%y anos"); 
					?>
				</td>
			</tr>
			<tr>
				<td> 
					John Myung
				</td>
				<td> 
					80
				</td>
				<td> 
					1.72
				</td>
				<td> 
					<?php
						$peso = 80;
						$alt = 1.72;
						$calc1 = $alt*$alt;
						$calc2 = $peso/$calc1;
						$result = $calc2;
						echo number_format ($resultado,2,',','.');
					?>
				</td>
				<td> 
					28/02/1990
				</td>
				<td> 
					<?php
						 $hoje = new DateTime("2017-09-05"); 
						 $nascimento = new DateTime("1990-02-28"); 
						 $intervalo = $hoje->diff($nascimento); 
						 echo $intervalo->format("%y anos"); 
					?>
				</td>
			</tr>
			<tr>
				<td> 
					James Labrie
				</td>
				<td> 
					54
				</td>
				<td> 
					1,64
				</td>
				<td> 
					<?php
						$peso = 54;
						$alt = 1.64;
						$calc1 = $alt*$alt;
						$calc2 = $peso/$calc1;
						$result = $calc2;
						echo number_format ($resultado,2,',','.');
						
						
					?>
				</td>
				<td> 
					10/09/1985
				</td>
				<td> 
					<?php
						 $hoje = new DateTime("2017-09-05"); 
						 $nascimento = new DateTime("1985-09-10"); 
						 $intervalo = $hoje->diff($nascimento); 
						 echo $intervalo->format("%y anos"); 
					?>
				</td>
			</tr>
			<tr>
				<td> 
					Jordan Rudess
				</td>
				<td> 
					85
				</td>
				<td> 
					1,73
				</td>
				<td> 
					<?php
					$peso = 85;
						$alt = 1.73;
						$calc1 = $alt*$alt;
						$calc2 = $peso/$calc1;
						$result = $calc2;
						echo number_format ($resultado,2,',','.');
						
					?>
				</td>
				<td> 
					04/09/1989
				</td>
				<td> 
					<?php
						 $hoje = new DateTime("2017-09-05"); 
						 $nascimento = new DateTime("1989-09-04"); 
						 $intervalo = $hoje->diff($nascimento); 
						 echo $intervalo->format("%y anos"); 
					?>
				</td>
			</tr>
			<tr>
				<td> 
					Mike Mangini
				</td>
				<td> 
					46
				</td>
				</td>
				<td> 
					1,55
				</td>
				<td> 
					<?php
						$peso = 46;
						$alt = 1.55;
						$calc1 = $alt*$alt;
						$calc2 = $peso/$calc1;
						$result = $calc2;
						echo number_format ($resultado,2,',','.');
					?>
				</td>
				<td> 
					31/12/1978
				</td>
				<td> 
					<?php
						 $hoje = new DateTime("2017-09-05"); 
						 $nascimento = new DateTime("1978-12-31"); 
						 $intervalo = $hoje->diff($nascimento); 
						 echo $intervalo->format("%y anos"); 
					?>
				</td>
			</tr>
		</table>

	</body>
</html>