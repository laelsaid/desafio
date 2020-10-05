<?


function ler_txt($texto){

	//Variável para armazenar o arquivo txt
	$arquivo = "dados.txt";
	
	//Variável $fp armazena a conexão e abre para leitura (parâmetro r)
	$fp = fopen($arquivo, "r");
    $dados = fread($fp, filesize($arquivo));

	//Escreve no arquivo aberto.
	//fwrite($fp, $texto);
	
	//Fecha o arquivo.
	fclose($fp);
}


?>