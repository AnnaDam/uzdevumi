<? 

	if(!isset($_GET['tekstaLauks'])) {
		$_GET['tekstaLauks'] = '';
	}

	if(!isset($_GET['funkcija'])) {
		$_GET['funkcija'] = null;
	}

	if(!isset($_GET['dropdowns'])) {
		$_GET['dropdowns'] = "viens";
	}

	$radio = $_GET['funkcija'];
	switch ($radio) {
		case 'MANYwords':
			$t1v="checked";
			$t2v="";
			$t3v="";
			break;

		case 'Backwards' :
			$t1v="";
			$t2v="checked";
			$t3v="";
			break;

		case 'OFTENwords' :
			$t1v="";
			$t2v="";
			$t3v="checked";
			break;
		
		default:
			$t1v="checked";
			$t2v="";
			$t3v="";
			break;
	}

	$izvade = TEXTsubmit($_GET['tekstaLauks'], $_GET['funkcija'], $_GET['dropdowns']);


	function TEXTsubmit($txt, $funkcija, $opt) {
		if (isset($funkcija)) {
			if ($funkcija == "MANYwords") {
				$arr = explode(" ", $txt);
				$plur = "vārdi";
				if(count($arr) <= 1) {
					$plur = "vārds";
				}
				$izvade = "Jūsu tekstā ir ".count($arr)." $plur";
				return $izvade;

			} else if ($funkcija == "Backwards") {
				$izvade = strrev($txt);
				return $izvade;

			} else if ($funkcija == "OFTENwords") {
				$ltext = strtolower($txt);
				$arr = explode(" ", $ltext);
				$words_fr = array_count_values($arr);
				arsort($words_fr);
				$keys = array_keys($words_fr);
				$uno = "Visbiežāk sastopamais vārds ir ' $keys[0] ', kas atkātrojas ". $words_fr[$keys[0]]. " reizes ";
				$dos = "";
				$tres = "";

					if (count($keys) >= 2) {
							if ($opt == "divi" || $opt == "tris") {
								$dos = ", otrs ir ' $keys[1] ' - atkātrojas ". $words_fr[$keys[1]]. " reizes ";
						} 

					} 

					if (count($keys) >= 3) {
					  	if ($opt == "tris") {
							$tres = ", trešais ir ' $keys[2] ' - atkātrojas ". $words_fr[$keys[2]]. " reizes ";
						}

					}
				$izvade = "$uno $dos $tres";
				return $izvade;

			}
		} 
	}
?>
