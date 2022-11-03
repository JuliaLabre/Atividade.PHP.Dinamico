<?php

// Importa o arquivo de configuração:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Erro 404';

// Define o conteúdo da página:
$page_content = <<<HTML

<img src="../img/404.webp" width="350px">
<p>A página solicitada não existe ou está indisponível no momento...</p>
<a href="/">Fuja do monstro!!</a>

HTML;

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa template da página:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_template.php');
?>