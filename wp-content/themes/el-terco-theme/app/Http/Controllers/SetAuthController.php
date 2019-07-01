<?php

namespace App\Http\Controllers;

use Illuminate\Controller;

class SetAuthController extends Controller
{
    public function store($input)
    {
        // Seteamos la cookie 30 días, y lo redirigimos a donde quería entrar.
        setcookie('el_terco_adult_auth', true, time()+10*60, '/', '', 0, true);

        $url = specialPagePermalink('home');

        if(wp_http_validate_url($input['referer'])){
            $url = $input['referer'];
        }

        wp_safe_redirect($url);
    }
}
