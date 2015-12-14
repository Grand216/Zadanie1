<?php

namespace amyszor\Component\Password;


interface EncodingMethod
{
    public function encode($plainText);
}