<?php
function format_bytes($size, $precision = 2)
{
    if ($size > 0) {
        $size = (int) $size;
        $base = log($size) / log(1024);
        $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
    } else {
        return $size;
    }
}
function human_filesize($size, $precision = 2) {
    $units = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
    $step  = 1024;
    $i     = 0;
    while (($size / $step) > 0.9) {
        $size = $size / $step;
        $i++;
    }
    return round($size, $precision). ' ' .$units[$i];
}
function is_localhost()
{
    try {
        
        // check 
        if (isset($_SERVER['REMOTE_ADDR'])) {
            return in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')) ? true : false;
        }

        return true;

    } catch (\Throwable $th) {
        return true;
    }
}