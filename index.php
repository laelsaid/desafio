<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?

$arquivo = "dados.txt";
$fp = fopen($arquivo, "r");
//$dados = fread($fp, filesize($arquivo));


?>

<form action="cadastrar_jogo.php" method="post">

   <div style="width:100%; height:100%; border: 0px solid #000000; margin:0px auto; margin-top:40px">
   		
		<div style="width:10%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Jogo
		</div>
		<div style="width:10%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Placar
		</div>
		
		<div style="width:15%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Mínimo da Temporada
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Máximo da Temporada
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Quebra Recorde (min.)
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			Quebra Recorde (máx)
		</div>
		
		
		<?
				
			   while (!feof ($fp)) 
			   {
			   
					$valor = fgets($fp, 1024);
		
					
					
				 
				 
				
		?>
			
		<div style="width:10%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,0,2); ?>
		</div>
		<div style="width:10%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,3,3); ?>
		</div>
		
		<div style="width:15%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,7,3); ?>
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,11,3); ?>
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,15,3); ?>
		</div>
		
		<div style="width:20%; height:100%; border: 1px solid #000000; float:left; text-align:center">
			<? echo substr($valor,19,3); ?>
		</div>
		
		
		
		<?
		
			}
			
			fclose($fp);
			
			
		?>
   			
   
   </div>


	<div style="width:100%; height:100%; float:left; text-align:center">
				<input  style="width:20%; margin-top:20px" name="Cadastrar" title="Cadastrar" value="Cadastrar"  type="submit"/>
	
	</div>
</form>
</body>
</html>
