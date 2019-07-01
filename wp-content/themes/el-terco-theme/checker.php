<?php

$cookie_name = 'el_terco_adult_auth';

// Obtenemos el id original de la current page.
$login_orig_id = icl_object_id(get_the_ID(), 'page', false, 'es');
$login_id = specialPage('eres-mayor-de-edad');

// Revisamos que no sea el login.
if($login_id != $login_orig_id){

    if(!isset($_COOKIE[$cookie_name])) {

        $url = get_permalink($login_id) . '?' . http_build_query(['http_referer' => current_url()]);
        wp_safe_redirect($url);
        die;
    
    }

}

