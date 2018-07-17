<?php
// print every name in the array
// return the average age of the array of people

$arrOfPeople = [
	[
		"name" => "person name",
		"age" => 42
	],
	[
		"name" => "another person name",
		"age" => 28
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

function calcAverageAgeOfPeople($arr) {
	if (is_array($arr)) {
		$arrLength = count($arr);
		$aveAge = 0;
		for ($i= 0; $i < $arrLength; $i++) {
			$aveAge += $arr[$i]["age"];
		}
	}
	return $aveAge;
}

// test
echo calcAverageAgeOfPeople($arrOfPeople);
?>