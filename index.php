<?php

require __DIR__ . '/vendor/autoload.php';

$logger = null;

$pdfToText = XPDF\PdfToText::create(array(
    'pdftotext.binaries' => '../../../../usr/bin/xpdf/bin64/pdftotext',
    'pdftotext.timeout' => 30, // timeout for the underlying process
), $logger);

$text = $pdfToText->getText('sample.pdf');

// remove non-latin characters
$clean_txt = preg_replace('/[^\00-\255]+/u', '', $text);
var_dump($clean_txt);
