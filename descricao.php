<?php
	$detalhes[1] = "Detalhes do fogão";
	$detalhes[2] = "Detalhes da Cadeira";
	$detalhes[3] = "Detalhes da TV";
	$detalhes[4] = "Detalhes do Computador";

	$id_produto = $_REQUEST['id_produto'];
	echo $detalhes[$id_produto];
?>