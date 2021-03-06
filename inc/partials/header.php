<?php
$_v = round(time()/10);
if(!isset($is_fullscreen)){
    $is_fullscreen = false;
}

$html_classes = '';
if($is_fullscreen){
    $html_classes .= 'cssc-is-fullscreen';
}

?><!DOCTYPE html>
<!--[if lt IE 8 ]><html dir="ltr" lang="fr-FR" class="<?php echo $html_classes; ?> is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="fr-FR" class="<?php echo $html_classes; ?> is_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="fr-FR" class="<?php echo $html_classes; ?> is_ie9 lt_ie10"><![endif]-->
<!--[if gt IE 9]><html dir="ltr" lang="fr-FR" class="<?php echo $html_classes; ?> is_ie10"><![endif]-->
<!--[if !IE]><!--><html dir="ltr" lang="fr-FR" class="<?php echo $html_classes; ?>"><!--<![endif]-->
    <head>
        <title>CSS Common - Framework CSS</title>
        <meta charset="UTF-8" />

        <!-- Magie des navigateurs -->
        <?php if($is_responsive){
            ?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><?php
        }else {
            ?><meta name="viewport" content="width=1020" /><?php
        } ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!-- Feuilles CSS Common -->
        <link rel="stylesheet" href="csscommon.min.css?v=<?php echo $_v; ?>" type="text/css" />
        <link rel="stylesheet" href="css/demo.css?v=<?php echo $_v; ?>" type="text/css" />

        <!-- Scripts -->
        <!--[if lt IE 9]><script src="js/selectivizr-min.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <script src="js/mootools-1.4.5.min.js"></script>
    </head>

    <body>

    <div id="main-container" class="<?php echo $is_responsive ? 'cssc-is-responsive' : ''; ?>">
        <?php if(!$is_responsive){ ?>
        <header id="header" class="centered-container">
            <h1>CSS Common - Framework CSS</h1>
        </header>
        <nav class="cssc-mainnav cssc-mainnav--default centered-container">
            <ul class="cssc-mainmenu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?p=cssc-forms">Formulaires</a></li>
                <li><a href="index.php?p=cssc-grid">Grilles</a></li>
                <li><a href="index.php?p=cssc-navigation">Navigation</a></li>
                <li><a href="index.php?p=cssc-tables">Tableaux</a></li>
                <li><a href="index.php?p=cssc-layouts">Layouts</a></li>
                <li><a href="index.php?p=cssc-effects">Effects</a></li>
                <li><a href="index.php?p=debug">Debug</a></li>
                <li><a href="responsive.php">Responsive</a></li>
            </ul>
        </nav>
        <?php } ?>