<?php

    function maxStr ($var, $max) {
        if (strlen($var) < 20) {
            return $var;
        }
        else {
            return substr($var, 0, $max)."...";
        }
    };

?>