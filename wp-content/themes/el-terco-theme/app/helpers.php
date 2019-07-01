<?php 

function print_responsive_images_styles ($query) {
    echo '<style> @media only screen and (max-width: 805px) {';
    
    while ($query->have_posts()) { $query->the_post();
        $original_id = icl_object_id(get_the_ID(), 'product', '', 'es');
        if (get_field('home_image_responsive', $original_id) && get_field('home_image', $original_id)) {
            echo '.movil-' . get_the_ID() . '{ background-image: url("' . get_field('home_image_responsive', $original_id)['url'] . '") !important; }';
        }
    }

    echo '}</style>';
}

function get_query_param($key){
    if(array_key_exists($key, $_GET) && strlen($_GET[$key]) != 0){
        return $_GET[$key];
    }
    return false;
}

function current_url() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}