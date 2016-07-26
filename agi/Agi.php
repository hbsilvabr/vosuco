#!/usr/bin/php
<?php

// ob_implicit_flush(false);
// error_reporting(0);

$s_in = fopen('php://stdin', 'r');
$s_out = fopen('php://stdout', 'w');

require_once(dirname(__FILE__) . '/' . 'Suap.php');
require_once(dirname(__FILE__) . '/' . 'Handler.php');

$ast = new Handler($s_in, $s_out);
$ast->endConversation();
// $suap = new Suap('123', 'asdasd#');
// $resp = $suap->consume('https://suap.ifrn.edu.br/edu/aluno/20151014050006/?tab=boletim');


?>
