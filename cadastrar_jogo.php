<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form action="salvar_dados.php" method="post">

<div style="width:60%; margin: 0px auto; margin-top:10px;  text-align:center;">
		
		Novo Jogo
</div>

<div style="width:60%; margin: 0px auto; margin-top:30px; margin-left:30%">

  <div>Jogo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="jogo" id="jogo" type="text" /></div>
  <div>Placar: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="placar" id="placar" type="text" /></div>
  <div>Min Temporada: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="mintemp" id="mintemp" type="text" /></div>
  <div>Máx Temporada: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="maxtemp" id="maxtemp" type="text" /></div>
  <div>Quebra  Recorde (min): <input name="quebramin" id="quebramin" type="text" /></div>
  <div>Quebra  Recorde (máx): <input name="quebramax" id="quebramax" type="text" /></div>

</div>

<div style="width:100%; height:100%; float:left; text-align:center">

	<input  style="width:20%; margin-top:20px" name="Cadastrar" title="Cadastrar" value="Cadastrar"  type="submit"/>
</div>

</form>


</body>
</html>
