<?php

include ('conexao.php');

  $usuario=$_POST['usuario'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];

  $sql = "SELECT * FROM login WHERE usuario = '$usuario'";
  $result = $mysqli->query($sql);
  $linhas = mysqli_num_rows($result);

  if($linhas>0){
  	  $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
	  $result = $mysqli->query($sql);
	  $linhas = mysqli_num_rows($result);
	  if($linhas>0){
	  	echo "3";
	  }else{
	  	echo "2";
	  }
	}else{
		echo "1";
	}

