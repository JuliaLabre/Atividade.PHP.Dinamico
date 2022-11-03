<?php

// Importa o arquivo de configuração:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Faça contato';

/**************************************************************
 * Define o conteúdo "visual" da página:                      *
 * Observe que temos, por padrão, um design com duas colunas. *
 * A coluna "aside", porém, será opcional para cada página.   *
 **************************************************************/
$page_content = <<<HTML

<article>

    <h2>{$page_title}</h2>
    <form>
  <label for="name">Nome:</label>
  <input type="text" id="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email"><br><br>
  <label for="mesage">Fale Conosco:</label><br>
  <textarea id="mesage" rows="4" cols="50" placeholder="Digite sua mensagem aqui..."></textarea>
  <br>
  <input type="submit" value="Submit">
</form>

</article>

<aside>
<br>
    <a href="../about">Conheça um pouco mais sobre nós...</a>

</aside>

HTML;

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa template da página:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_template.php');
?>