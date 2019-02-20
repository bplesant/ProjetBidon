<?php
/**
 * Created by PhpStorm.
 * User: xto
 * Date: 15/02/2019
 * Time: 15:15
 */

final class Coupee extends Voiture
{
    use Paresoleil;

    public $nbPorte = "3";

    public function setMessage($msg)
    {
        $this->message = $msg;
    }
}