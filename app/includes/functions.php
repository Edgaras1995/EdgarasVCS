<?php
    function copyright($metai) {
        $sie_metai = date('Y');
        if($metai >= $sie_metai) {
        echo '&copy; ' . $sie_metai;
    } else {
        echo '&copy; ' . $metai . ' -  ' . $sie_metai;
    }
    }
?>