$(document).ready(function(){
	$('#login').submit(function(e){ 	//Ao submeter formulário

		e.preventDefault();

		var usuario=$('#usuario').val();	
		var senha=$('#senha').val();	

		$.ajax({			
			url:"login.php",			
			type:"post",				
			data: "usuario="+usuario+"&senha="+senha,	//Dados
   			success: function (result){			//Sucesso no AJAX
                		if(result=="1"){
                			$('.feed')
                				.text('Nome de usuário incorreto!')
                				.slideToggle()
                				.delay(2000)
                				.slideToggle();
                		}else if (result=="2") {
                			$('.feed')
                				.text('Senha incorreta!')
                				.slideToggle()
                				.delay(2000)
                				.slideToggle();
                		}else if(result=="3"){
                			$('.feed')
                				.text('Logado com sucesso!')
                				.slideToggle()
                				.delay(1000)
                				.slideToggle();
                		}
            		}
		});
		return false;	//Evita que a página seja atualizada
	})
});