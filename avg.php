<?php

	function average (a, b){
		return (a+b)/2;
	}
	function average (a, b, a_higher = true){
	if(a_higher){
		return 0.1*a+0.9*b;
	}
	else{
		return 0.4*a+0.6*b;
	}
?>
