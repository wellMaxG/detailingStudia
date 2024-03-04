
<?php

use Illuminate\Support\Facades\Route;

if(! function_exists('active_link')) {

    function active_link(string $name, string $active = 'active'): string 
    {

        return Route::is($name) ? $active : '';
    }
}



function formatPhoneNumber($phoneNumber)
{
    // Примените логику форматирования здесь
    // Например, преобразуйте "1234567890" в "123-456-7890"
    return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phoneNumber);
}
