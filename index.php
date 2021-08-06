<?

	$data = @json_decode(file_get_contents('data.json'), true);

	
	if (!is_array($data)) {
		$data = [
		 	 "items" => []
		];
	}


	//date_default_timezone_get('Europe/Riga');
	$date1 =  date("H:i j.m.o");

	if(count($_POST) > 0) {

		if(isset($_POST['addNew']) && !empty($_POST['addNew'])) {
	 	 	 $data["items"][] = [
	 	 	 	 'text' => $_POST['addNew'],
	 	 	 	 'done' => false,
	 	 	 	 'date' => $date1 
	 	 	 ];
	 	 } 	 	
		 if(isset($_POST['editId'])) {

			$id = $_POST['editId'];

			if(isset($_POST['delete'])) {
				unset($data['items'][$id]);
			} else {
				$data['items'][$id]['done'] = isset($_POST['done']);
			}
		} 
	 	 	file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));

			header('Location: .');
		
			die();
	}

?>

<html>
<head>
	 	 <title>ToDo</title>
	 	 <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
</head>
<body>
	 	 <ul>
	 	 <? foreach($data["items"] as $index => $item) { ?>
	 	 	 <li>
	 	 	 	 <form method="POST">
	 	 	 	 	<input type="hidden" name="editId" value="<?=$index?>"/>
	 	 	 	 	 <input type="checkbox" name="done" onchange="this.form.submit()"<?=($item['done'] ? 'checked="checked"' : '')?> />
	 	 	 	 	 	 <?=$item['text']?> 
	 	 	 	 	 	 <button name="delete" class="submbutton">Dzēst</button>
	 	 	 	 	 	 <?=$item['date']?>	
	 	 	 	 </form>
	 	 	 </li>
	 	 <? } ?>
	 	 </ul>
	 	 <form method="POST">
	 	 	 <input type="text" name="addNew" placeholder="Pievienot uzdevumu..." autofocus/>
	 	 	 <input type="submit" class="submbutton" value="Pievienot"/>
	 	 </form>
</body>

	<style type="text/css">

		body {
			margin: 3% 7% 3% 7%;
			padding: .5% 5% 2% 21%;

		}

		 .submbutton {
		 	text-align: center;
		 	width: 90px;
		 	height: 25px;
		 	font: bold 15px arial, sans-serif;
		 	color: white;
		 	border-color: Chocolate;
		 	background: BurlyWood;
 		}

 		ul {
 			list-style: none;
 			color: Darkred;	
 			background: white;	
		}

		li::before {
		  content: "=>";
		  color: IndianRed;
		  font-weight: bold;
		  margin-left: -40px;
		}

	</style>

</html>