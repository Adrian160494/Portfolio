<?php

$file = "CV/Adrian_Ciejka_CV.pdf";

    header("Content-length: ".filesize($file));
    header("Content-type: ".mime_content_type($file));
    header("Content-Disposition: attachment; filename=$file");
    readfile($file);

    exit();
?>