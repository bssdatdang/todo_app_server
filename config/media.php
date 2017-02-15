<?php
/**
 * Created by PhpStorm.
 * User: ThuTran
 * Date: 10/7/2016
 * Time: 11:53 AM
 */

return [
    /*
    |--------------------------------------------------------------------------
    | //TODO this small issue can be fix but it take too much time
    | The path where the media files will be uploaded, include public folder also
    |--------------------------------------------------------------------------
    */
    'files-path' => '/public/assets/media/',
    /*
    |--------------------------------------------------------------------------
    | Specify all the allowed file extensions a user can upload on the server
    |--------------------------------------------------------------------------
    */
    'allowed-types' => '.jpg,.png,.jpeg,.csv,.pdf',
    /*
    |--------------------------------------------------------------------------
    | Determine the max file size upload rate
    | Defined in MB
    |--------------------------------------------------------------------------
    */
    'max-file-size' => '20',

    /*
    |--------------------------------------------------------------------------
    | Determine the max total media folder size
    |--------------------------------------------------------------------------
    | Expressed in bytes
    */
    'max-total-size' => 1000000000,
];
