<?php

/**
 *  This helper function converts any string representing
 *  a Windows formatted local path to a Unix one.
 */
function windows_to_linux_path( $path ) {
    $path = str_replace( 'file:///', '', $path );
    $path = str_replace( '\\', '/', $path );
    $path = str_replace( 'C:/', '/', $path );
    $path = str_replace( ' ', '\ ', $path );
    $path = preg_replace( '|(?<=.)/+|', '/', $path );
    if ( ':' === substr( $path, 1, 1 ) ) {
        $path = ucfirst( $path );
    }
    return $path;
}
// For linux, with love ❤

?>
