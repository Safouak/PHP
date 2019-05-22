<?php
     function ft_split($str)
	{
        $ret = array_filter(explode(' ', $str));
        print_r($ret);
		sort($ret);
		return $ret;
	}
?>
