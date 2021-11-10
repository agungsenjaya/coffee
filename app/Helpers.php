<?php

function routing($a) 
{
    switch ($a) {
        case 'home':
            echo 'Dashboard';
            break;
        case 'account':
            echo 'Account';
            break;
        case 'website':
            echo 'Website';
            break;
        case 'index.product':
            echo 'Products';
            break;
        case 'create.product':
            echo 'Create Products';
            break;
        case 'edit.product':
            echo 'Edit Products';
            break;
        default:
            # code...
            break;
    }
}

function counting($a) 
{
    $b = strlen($a);
    switch ($b) {
        case 1:
            echo '00'. $a;
            break;
        case 2:
            echo '0'. $a;
            break;
        default:
            echo '000';
            break;
        }
    }

    function translate($a)
    {
        $var = LaravelLocalization::getCurrentLocale();
        echo \Stichoza\GoogleTranslate\GoogleTranslate::trans($a, $var, 'id');
    }