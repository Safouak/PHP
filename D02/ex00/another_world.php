#!/usr/bin/php
<?php
    function    ft_split($str)
    {
        str_replace('\t', '', $str);
        $ret = array_filter(explode(' ', $str));
        $ret = array_values($ret);
        return $ret;
    }
    if($argc < 2)
        exit();
    $strtab = ft_split($argv[1]);
    foreach($strtab as $key=>$elem)
    {
		if ($key != 0)
			echo " ";
		echo $elem;
	}
	echo "\n";
?>