<?php

// By: https://github.com/lucabecchetti/laravel_subdir
// To help with subdir linking


if (! function_exists('subdirAsset')) {
function subdirAsset($path){
return asset( (App::environment('production') ? env('APP_DIR') : '')."/".$path);
}
}
if (! function_exists('subdirMix')) {
function subdirMix($path){
return mix( (App::environment('production') ? env('APP_DIR') : '')."/".$path);
}
}