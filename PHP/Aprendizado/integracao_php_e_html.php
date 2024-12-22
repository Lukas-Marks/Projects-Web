<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>asalsk</title>
</head>
<body>

<form method="get" action="dados.php">
	Valor:<input type="text" name="v">

	<input type="submit" name="" value="calcular">
	<hr>

	<input type="text" name="nome">
	<input type="date" name="data">
	<input type="number" name="nasc">
	

		<!-- <fieldset> -->
		<input type="radio" name="sexo" id="mascu" value="Masculino" checked="">

		<label for="mascu">Masculino</label>

		<input type="radio" name="sexo" id="femi" value="Feminino">

		<label for="femi">Feminino</label>

		<input type="submit" name="" value="Enviar">
		<!-- </fieldset> -->

		<hr>

		<input type="text" name="tex">
		<br>
		<select name="tam">
			<option value="19px">19px</option>
			<option value="29px">29px</option>
			<option value="39px">39px</option>
			<option value="49px">49px</option>
			<option value="59px">59px</option>
		</select>
		<br>
		<input type="color" name="cor">
		<input type="submit" name="" value="Gerar">
</form>
</body>
</html>