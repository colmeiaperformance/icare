<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<script>
//Variáveis para armazenar o logo branco e colorido inserido no painel
var logoBranco =
    "<?php if ( !empty( get_field('logo_branco', 'option') ) ) : the_field('logo_branco', 'option'); endif ?>";
var logoColorido =
    "<?php if ( !empty( get_field('logo_colorido', 'option') ) ) : the_field('logo_colorido', 'option'); endif ?>";
</script>

<body <?php body_class(); ?> class="ica-pag" id="pag-home">