<?php
function botstat($params, $values) 
{
	if(is_array($params) && is_array($values)) // check if params and values are defined
	{
		$results = [];
		foreach(array_combine($params, $values) as $packet => $value)
		{
			$results[] = $packet . '="' . $value . '"';
		}
		$finalStr = implode(' ', $results);
		return '<bs ' . $finalStr . ' />'; // yeah, it works
	}
	else
	{
		return false; // nope, its wrong
	}
}

/*
a is Avatar,
n is Nickname,
s is Status,
h is Homepage
*/
$packets = ['n', 'a'];

/*
All values should be added there
*/
$values = ['My name is Laming', '158'];

/*
Calling the function
*/
$callItBaby = botstat($packets, $values);
print($callItBaby);

/*
Result would be like:
<bs n="My name is Laming" a="158" />
*/
?>