<?php
    $min = 18;
    if ($min >= 0 and $min <= 14) {
    	echo '1 четверть';
    }
    if ($min >= 15 and $min <= 29) {
	echo '2 четверть';
    }

    if ($min >= 30 and $min <= 44) {
	echo '3 четверть';
    }

    if ($min >= 45 and $min <= 59) {
	echo '4 четверть';
    }
?>
<br>
<?php
    $str = '123';

    if (strlen($str) >= 3) {
	echo strlen($str);
    }   
?>
<br>
<?php
    }   else {
        echo "делится с отстатком" . $rest;
    }
?>
