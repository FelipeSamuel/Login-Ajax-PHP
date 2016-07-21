<?php

$mysqli = new mysqli('localhost','root','','ajax');

if(mysqli_connect_errno($mysqli))
	echo "erro na conexao";