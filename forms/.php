<!DOCTYPE html>
	<html>
	<head>
		<title>Forms</title>
	</head>
	<body>
	<form>
	
	<br/>
	<br/>
	
	Parasts teksta lauks:<br/>
	<input type="text" value="<?=$_GET['tekstaLauks']?>" name="tekstaLauks"/><br/>
	
	<br/>
	<br/>
	
	Lielais texta lauks:<br/>
	<textarea name="lielaisTekstaLauks"></textarea><br/>
	</body>
	</html>

<? 
	if(!isset($_GET['tekstaLauks'])) {
		$_GET['tekstaLauks'] = '';
	}
?>

<form>
	
	<br/>
	<br/>
	
	Parasts teksta lauks:<br/>
	<input type="text" value="<?=$_GET['tekstaLauks']?>" name="tekstaLauks"/><br/>
	
	<br/>
	<br/>
	
	Lielais texta lauks:<br/>
	<textarea value="<?=$_GET['lielaisTekstaLauks']?>" name="lielaisTekstaLauks"></textarea><br/>
