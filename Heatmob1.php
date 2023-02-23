<?php
function isLucky($n)
{
	$counter = 2;
	if($counter > $n)
		return 1;
	if($n % $counter == 0)
		return 0;
	$next_position = $n - ($n / $counter);
	$counter++;
	return isLucky($next_position);
}
	// Driver Code
	$x = 5;
	// Function call
	if(isLucky($x) )
		echo $x ," is a lucky no.";
	else
		echo $x ," is not a lucky no.";
?>
