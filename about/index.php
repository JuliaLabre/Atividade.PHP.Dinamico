<?php

// Importa o arquivo de configuração:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Quem somos';

// query para obter o artigo mais recente do site:
$sql = "

SELECT aid, title, thumbnail, resume
FROM articles
    WHERE astatus = 'online'
    AND adate <= NOW()
ORDER by adate DESC
LIMIT 1;

";
$content='';

// Executa query e armazena em '$res':
$res = $conn->query($sql);

$art = $res->fetch_assoc();
 
$content .= <<<HTML

<div class="artbox" onclick="location.href='/view/?{$art['aid']}'">
    <img src="{$art['thumbnail']}" alt="{$art['title']}">
    <h3>{$art['title']}</h3>
    <div>{$art['resume']}</div>
</div>

HTML;


/**************************************************************
 * Define o conteúdo "visual" da página:                      *
 * Observe que temos, por padrão, um design com duas colunas. *
 * A coluna "aside", porém, será opcional para cada página.   *
 **************************************************************/
$page_content = <<<HTML

<article>

    <h2>{$page_title}</h2>
    <p>Uma equipe de uma mulher só! <br>
       Além de técnica em contabilidade, esposa, mãe, filha, irmã, flamenguista... 
       Agora uma estudante de programação web tentando entender como criar esses sites incríveis e explorar algumas possibilidades.</p>
    <img src="../img/sobre.webp">

</article>

<aside>

    <h3>Conheça nosso artigo mais recente:</h3>
   {$content}
</aside>

HTML;

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa template da página:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_template.php');
?>