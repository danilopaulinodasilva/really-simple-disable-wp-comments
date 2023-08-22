<?php

/*
Plugin Name: Really Simple Disable Comments
Description: Disable comments on all posts and pages.
Version: 1.0.0
Author: Danilo P. da Silva
Author URI: https://dps.tec.br
Plug-in URI: https://github.com/danilopaulinodasilva/really-simple-disable-comments
License: GPL-3.0+
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

// Função para desabilitar comentários
function disable_comments() {
    return false;
}

// Desabilitar comentários em posts e páginas
add_filter('comments_open', 'disable_comments', 10, 2);
add_filter('pings_open', 'disable_comments', 10, 2);

// Esconde as opções de comentários no painel de administração
add_action('admin_init', function () {
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
});
