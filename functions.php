<?php
    function component($folder, $filename) {
        $directory = "components/";

        if (is_file($filename)) {
            include $directory . $folder . $filename;
        }
    }

    function lessConfig() {
        $filename = 'css/config.css';

        if (file_exists($filename)) {
            echo "css/config.css";
        } else {
            echo "css/configDefault.css";
        }
    }
