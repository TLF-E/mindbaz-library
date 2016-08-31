<?php


 function autoload_ded99516682da992419a8fdc7dd2e2aa($class)
{
    $classes = array(
        'mbzPicture\PictureWebService' => __DIR__ .'/PictureWebService.php',
        'mbzPicture\ListCustom' => __DIR__ .'/ListCustom.php',
        'mbzPicture\ESortDir' => __DIR__ .'/ESortDir.php',
        'mbzPicture\ListResponse' => __DIR__ .'/ListResponse.php',
        'mbzPicture\PictureListResult' => __DIR__ .'/PictureListResult.php',
        'mbzPicture\ArrayOfPicture' => __DIR__ .'/ArrayOfPicture.php',
        'mbzPicture\Picture' => __DIR__ .'/Picture.php',
        'mbzPicture\MindbazAuthHeader' => __DIR__ .'/MindbazAuthHeader.php',
        'mbzPicture\Rename' => __DIR__ .'/Rename.php',
        'mbzPicture\RenameResponse' => __DIR__ .'/RenameResponse.php',
        'mbzPicture\Upload' => __DIR__ .'/Upload.php',
        'mbzPicture\UploadResponse' => __DIR__ .'/UploadResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ded99516682da992419a8fdc7dd2e2aa');

// Do nothing. The rest is just leftovers from the code generation.
{
}
