<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.05.2018
 * Time: 8:25
 */

namespace App\Models;


class Text
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getText()
   {
       $text = file_get_contents($this->path);

       return $text;
   }
   public function setText($data)
   {
       $text = file_put_contents($this->path, $data);

       return $text;
   }

}