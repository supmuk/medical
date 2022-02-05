<?php
use Illuminate\Support\Facades\Session;

if(!function_exists('displayAlert')) {
    function displayAlert()
    {
        if (Session::has('message'))
        {
            // Here type represnt the class of alert
            list($type, $message) = explode('|', Session::get('message'));
            return sprintf('<div class="alert alert-%s">%s</div>', $type, $message);
        }

        return '';
    }
}
