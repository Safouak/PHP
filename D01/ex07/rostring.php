<?php
	function ft_split($str)
	{
        $ret = array_filter(explode(' ', $str));
		return $ret;
    }
    $strtab = ft_split($argv[1]);
    array_push($strtab, $strtab[0]);
    unset($strtab[0]);
    $strtab = array_values($strtab);
    foreach($strtab as $str)
        echo $str. " ";
?>

