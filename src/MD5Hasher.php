<?php
/**
 *===================================================
 * Filename:MD5Hasher.php
 * Author:f4ck_langzi@foxmail.com
 * Date:2018-04-09 17:49
 *===================================================
 **/

namespace Laravist\Hasher;
class MD5Hasher
{
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}

