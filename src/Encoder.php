<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Jkan\Component\Password\Encoder;


use Jkan\Component\Password\EncodingMethod;

class Encoder
{
    private $encodingMethod;

    public function __construct(EncodingMethod $method)
    {
        $this->encodingMethod = $method;
    }

    public function encodePassword($password)
    {
        return $this->encodingMethod->encode($password);
    }
}