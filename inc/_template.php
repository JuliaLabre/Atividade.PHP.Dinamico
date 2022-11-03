<?php

/**
 * Processa o título da página → Tag <title>...</title>:
 **/
if ($page_title == '')                      // Se o título da página não foi definido...
    $tag_title .= " ·:· " . $site_slogan;   // O título recebe o slogan:
else                                        // Se definiu um título...
    $tag_title .= " ·:· " . $page_title;    // O título recebe o título definido:

/**
 * Mensagem de 'Copyright'no rodapé:
 **/
$ytoday = intval(date('Y'));                // Obtém o ano atual:
if ($ytoday > $site_year)                   // Se o ano atual é maior do que o ano do site...
    $copyright .= "{$ytoday} {$site_name}"; // Mostra o ano do site e o ano atual na mensagem:
else                                        // Se o ano atual é o ano do site...
    $copyright .= $site_name;               // Mostra somente o ano do site na mensagem:


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo $site_favicon ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title><?php echo $tag_title ?></title>

    
</head>

<body>

    <div id="wrap">

        <header>
            <a href="/">
            <img src=<?php echo $site_logo ?>>
            </a>

            <h1 onclick="location.href='/'"><?php echo $site_name ?>
            <span onclick="location.href='/'"><?php echo $site_slogan ?></span>
            </h1>
        </header>

    <hr>
        <nav>
            <a href="/">Início</a>
            <a href="/contacts">Contatos</a>
            <a href="/about">Sobre</a>
        </nav>
    <hr>
        <main><?php echo $page_content ?></main>

<footer>
    <br>
    <hr>
    <div><?php echo $copyright ?><br></div>
    <small><a href="/policies">Políticas de privacidade</a></small>
</footer>

</div>

</body>

</html>
