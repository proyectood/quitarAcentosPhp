<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quitar acentos</title>
	<style type="text/css">
		body{
			margin: 0 auto;
			width: 300px;
		}
		h4{
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
		<form method="post">
			<input type="text" name="texto">
			<input type="submit" name="boton" value="Dar formato">
		</form>
	</div>

</body>
</html>

<?php
	
	if(!empty($_POST['texto'])){
		$resultado = darFormato($_POST['texto']);
		echo '<h4>' . $resultado . '</h4>';
	}

	function darFormato($string){
		$string = str_replace(
			array('á','à','ä','â','Á','À','Ä','Â'),
			array('a','a','a','a','A','A','A','A'),
			$string
		);
	    $string = str_replace(
	        array('é', 'ë', 'ê', 'è', 'É', 'Ë', 'Ê', 'È'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $string
	    );
	    $string = str_replace(
	        array('í', 'ï', 'î', 'ì', 'Í', 'Ï', 'Î', 'Ì'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $string
	    );
	    $string = str_replace(
	        array('ó', 'ö', 'ô', 'ò', 'Ó', 'Ö', 'Ô', 'Ò'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $string
	    );
	    $string = str_replace(
	        array('ú', 'ü', 'û', 'ù', 'Ú', 'Ü', 'Û', 'Ù'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $string
	    );
	    $string = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C'),
	        $string
	    );
	    $string = str_replace(
	        array('[', '|', '°', '¬', '!', '^', '`', '~', '#', '$', '%', '&', '/', '(', ')', '=', '?', '¿', '{', '}', '_', ',', '.', '´', '+', '<', '>', '¡', '¨', '*', ':', ';', ']'),
	        '',
	        $string
	    );

	    return $string;
	}

?>