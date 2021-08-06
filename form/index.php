<!DOCTYPE html>
<html lang="lv">
<head>

	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Forms</title>
	<link rel="stylesheet" href="style.css">

	<?
 		require_once("functions.php");
	?>

</head>
<body>
	<form method="GET">

		<br/>
		<br/>
		

			<strong> Ievadiet tekstu šeit:</strong>

		<br/>

		<textarea rows="10" name="tekstaLauks" type="text"><?=$_GET['tekstaLauks']?></textarea>

		<br/>
		<br/>
		<br/>

			<strong> Kādu funkciju jūs vēlaties veikt: </strong>


		<br/>
		<input type="radio" name="funkcija" value="MANYwords" <?=$t1v?>/> Saskaitīt vārdus tekstā<br/>
		<input type="radio" name="funkcija" value="Backwards" <?=$t2v?>/> Apgriezt tekstu otrādāk (nav ieteicams, ja ir garumzīmes un/vai mīkstinājuma zīmes)<br/>
		<input type="radio" name="funkcija" value="OFTENwords" <?=$t3v?>/> Atrast biežāk sastopamos vārdus<br/>
		<br/>

			<strong> Šo izvēlieties tikai tad, ja ņemat 3. funkciju </strong>

		<br/>

		Atrast 
		<select name="dropdowns">
			<option value="viens">1</option>
			<option value="divi">2</option>
			<option value="tris">3</option>
		</select>
		visbiežāk izmantotos vārdus
		
		<br/>
		<br/>

		<input type="submit" class="submbutton" name="submit" value="Iesniegt" />

		<br/>


			<strong>Izvade:</strong>


	<p>


		<?=$izvade?>

	</p>

	</form>

	
</body>
</html>

