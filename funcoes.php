<?


function ler_txt($texto){

	//Vari�vel para armazenar o arquivo txt
	$arquivo = "dados.txt";
	
	//Vari�vel $fp armazena a conex�o e abre para leitura (par�metro r)
	$fp = fopen($arquivo, "r");
    $dados = fread($fp, filesize($arquivo));

	//Escreve no arquivo aberto.
	//fwrite($fp, $texto);
	
	//Fecha o arquivo.
	fclose($fp);
}


?>