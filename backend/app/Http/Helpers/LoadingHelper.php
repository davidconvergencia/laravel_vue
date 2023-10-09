<?php

namespace App\Http\Helpers;

class LoadingHelper
{
    public static function startLoading()
    {
       session()->put('loading', true);
    }

    public static function stopLoading()
    {
        session()->forget('loading');
    }

    public static function isLoading()
    {
        return session('loading', false);
    }
}
