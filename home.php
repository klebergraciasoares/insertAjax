<html>
<head>

<title>Insert AJAX</title>

<!-- include jquery library file-->
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- Ajax/jquery -->
<script type="text/javascript">

	$(document).ready(function(){
		
	//Obter os dados de entrada usando o método POST quando o inser no mysql é solicitado .. setar os campos ...
	$("#insert").click(function(){
		
	// Pega os valores dos inputs setado e os adiciona em uma variavel javascript	
	var id=$("#id").val();
	var name=$("#name").val();
	var email=$("#email").val();
	
	//usa o metodo $.post() para chamar o arquivo insert.php.. este é o AJAX de requisição
	$.post('insert.php', {id: id, name: name, email: email},
		function(data){
			$("#message").html(data);
			$("#message").hide();
			$("#message").fadeIn(1500); //efeito Fade nos dados fornecido pelo arquivo insert.php 
		});
			return false;
		});
	});
</script>
</head>
<body>
<label>ID: </label> <input id="id" type="text" />
<label>Nome: </label> <input id="name" type="text" />
<label>E-Mail: </label> <input id="email" type="text" />
<a id="insert" title="Insert Data" href="#">Inserir via AJAX</a> 

 <!-- For displaying a message -->
<div id="message"></div>
</body>
</html>