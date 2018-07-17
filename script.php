<?php
// print every name in the array
// return the average age of the array of people

$arrOfPeople = [
	[
		"name" => "James",
		"age" => 42
	],
	[
		"name" => "Jen",
		"age" => 28
	],
	[
		"name" => "Bob",
		"age" => 17
	],
	[
		"name" => "Ken",
		"age" => 53
	]
];

// print people's names

function printNames($arr) {
	if (is_array($arr)) {
		$arrLength = count($arr);
		for ($i= 0; $i < $arrLength; $i++) {
			print $arr[$i]["name"] ." \r\n";
		}
	}
}

// test printNames()
printNames($arrOfPeople);

/**
 * A function that takes an associative array of people with names and ages and returns an average age
 * @param array
 * @return int
 **/
function calcAverageAgeOfPeople($arr): float {
	if (is_array($arr)) {
		$arrLength = count($arr);
		$aveAge = 0;
		for ($i= 0; $i < $arrLength; $i++) {
			$aveAge += $arr[$i]["age"];
		}
	}
	return $aveAge/$arrLength;
}

/**
 * A function that takes an associative array of people with names and ages and returns an average age
 * @param array
 * @return int
 **/
function averageAge(array $personArray): float {
	$totalAge = 0;
	foreach($personArray as $person) {
		$totalAge += $person["age"];
		echo $person["name"] ."'s age is " .$person["age"] .PHP_EOL;
	}

	return ($totalAge/count($personArray));
}

// test
echo calcAverageAgeOfPeople($arrOfPeople);
?>