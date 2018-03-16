<?php
/**
 * Created by PhpStorm.
 * User: Shani
 * Date: 13.03.2018
 * Time: 10:12
 */

class GuestBookRecord
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

}