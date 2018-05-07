<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Php_training</title>
	<link rel="stylesheet" type="text/css" href="liste.css">
	</head>

	<body>
		<div id="container">
			<?php
				$A = array(
				'title' => 'a',
				'prix' => 20,
				'note' => 3,
				'prime' => 'oui');

				$B = array(
				'title' => 'b',
				'prix' => 30,
				'note' => 2,
				'prime' => 'non');

				$C = array(
				'title' => 'c',
				'prix' => 25,
				'note' => 5,
				'prime' => 'oui');

				$D = array(
				'title' => 'd',
				'prix' => 20,
				'note' => 2,
				'prime' => 'oui');

				$E = array(
				'title' => 'e',
				'prix' => 35,
				'note' => 3,
				'prime' => 'non');

				$F = array(
				'title' => 'f',
				'prix' => 15,
				'note' => 3,
				'prime' => 'oui');
					
				$G = array(
				'title' => 'g',
				'prix' => 20,
				'note' => 5,
				'prime' => 'oui');

				$H = array(
				'title' => 'h',
				'prix' => 25,
				'note' => 3,
				'prime' => 'non');

				$livres = array($A, $B, $C, $D, $E, $F, $G, $H);

				foreach ($livres as $livre) 
				{
					<div class="ligne">
						if ($livre['prime'] == 'oui') 
						{
							echo 'Le livre '.$livre['title'].'.<br />Il coûte : '.$livre['prix'].' €.<br /> Il est noté : '.$livre['note'].' sur 5. <br />Il bénéficie de la fonction prime.<br />';
						}
						else
							echo 'Le livre '.$livre['title'].'.<br />Il coûte : '.$livre['prix'].' €.<br /> Il est noté : '.$livre['note'].' sur 5. <br />Il ne bénéficie pas de la fonction prime.<br />';
					</div>
				}
				?>
			</div>
		</div>
	</body>
	</html>