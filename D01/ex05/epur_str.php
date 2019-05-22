<?php
	function ft_split($str)
	{
		$ret = array_filter(explode(' ', $str));
		$ret = array_values($ret);
		return $ret;
	}
	if ($argc != 2)
		return ;
    $strtab = ft_split($argv[1]);
	foreach($strtab as $key=>$v)
	{
		if ($key != 0)
			echo " ";
		echo $v;
	}
	echo "\n";
?>


