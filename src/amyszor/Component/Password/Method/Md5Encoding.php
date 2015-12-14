<?php

namespace amyszor\Component\Password\Method;


use amyszor\Component\Password\EncodingMethod;

class Md5Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return md5($plainText);
    }
}