<?php
    if (! function_exists('esraContent')) {
        function esraContent( $type = "rating", $id = 3 )
        {
            return \Morilog\Jalali\Jalalian::forge($str)->format($format);
        }
    }
?>
