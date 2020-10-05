<?


$jogo = $_POST['jogo'];
$placar =  $_POST['placar'];  
$mintemp =  $_POST['mintemp']; 
$maxtemp =  $_POST['maxtemp']; 
$quebramin =  $_POST['quebramin']; 
$quebramax =  $_POST['quebramax']; 



$texto = "\n"."$jogo"."  ".$placar."  ".$mintemp."  ".$maxtemp."  ".$quebramin."   ".$quebramax;

echo $texto;

$arquivo = "dados.txt";
$fp = fopen($arquivo, "a+");

fwrite($fp, $texto);
fclose($fp);

echo "<script>
	alert('Cadastro realizado com sucesso!'); location= 'index.php';
	</script>";

?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        