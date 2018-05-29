<?php

//Fontion permettant de mettre en relief le lien de la navbar sur laquelle on a cliqué
if (! function_exists('set_active_route')) {
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}

//Fonction permettant d'afficher le titre des pages en fonction de la page sur laquelle on se trouve 
if(!function_exists('set_page_tittle')){
    function set_page_tittle($title){

        $base_title = config('app.name') . ' - Liste des Artisans';

        return empty($title) ? $base_title : $title . ' | ' . $base_title;
    }
}