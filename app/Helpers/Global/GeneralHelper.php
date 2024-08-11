<?php

use Carbon\Carbon;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return 'home';
            }

            if (auth()->user()->isUser()) {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }
    function safeEncrypt($data)
    {
        $output         = false;
      
        $encrypt_method = 'AES-256-CBC';
        $secret_key     = 'WU9AHAl#Ra--WWre';
        $secret_iv      = 'M43Sy96JuvJ5N6jY';
      
        // hash
        $key            = hash('sha256', $secret_key);
      
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv             = substr(hash('sha256', $secret_iv), 0, 16);
      
        $output         = openssl_encrypt($data, $encrypt_method, $key, 0, $iv);
        $output         = base64_encode($output);
    
        return $output;
    
    }
    function safeDecrypt($encrypted)
{
    $output         = false;
  
    $encrypt_method = 'AES-256-CBC';
    $secret_key     = 'WU9AHAl#Ra--WWre';
    $secret_iv      = 'M43Sy96JuvJ5N6jY';
  
    // hash
    $key            = hash('sha256', $secret_key);
  
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv             = substr(hash('sha256', $secret_iv), 0, 16);
  
    $output         = openssl_decrypt(base64_decode($encrypted), $encrypt_method, $key, 0, $iv);

    return $output;
}
}
