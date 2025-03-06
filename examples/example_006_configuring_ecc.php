<?php

    include('../lib/full/qrlib.php');
    include('config.php');

    // how to save PNG codes to server

    $tempDir = EXAMPLE_TMP_SERVERPATH;

    $codeContents = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a';

    // generating
    QRcode::png($codeContents, $tempDir.'006_L.png', QRconst::QR_ECLEVEL_L);
    QRcode::png($codeContents, $tempDir.'006_M.png', QRconst::QR_ECLEVEL_M);
    QRcode::png($codeContents, $tempDir.'006_Q.png', QRconst::QR_ECLEVEL_Q);
    QRcode::png($codeContents, $tempDir.'006_H.png', QRconst::QR_ECLEVEL_H);

    // end displaying
    echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'006_L.png" />';
    echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'006_M.png" />';
    echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'006_Q.png" />';
    echo '<img src="'.EXAMPLE_TMP_URLRELPATH.'006_H.png" />';
