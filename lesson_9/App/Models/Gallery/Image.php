<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.03.2018
 * Time: 8:50
 */
namespace App\Models\Gallery;

class Image
{
    protected $path;
//    protected $mainType;
//    protected $extension;

    public function __construct($path)
    {
        $this->path = $path;

    }

    public function getImg()
    {
        return $this->path;
    }

}