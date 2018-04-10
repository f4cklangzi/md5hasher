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
    /**
     * @function Name make
     * @description Unfilled
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    /**
     * @function Name check
     * @description Unfilled
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}

