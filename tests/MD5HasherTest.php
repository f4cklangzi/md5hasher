<?php
/**
 *===================================================
 * Filename:MD5HasherTest.php
 * Author:f4ck_langzi@foxmail.com
 * Date:2018-04-10 14:45
 *===================================================
 **/


class MD5HasherTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var
     */
    protected $hasher;

    /**
     * @function Name setUp
     * @description Unfilled
     */
    public function setUp()
    {
        $this->hasher = new \Laravist\Hasher\MD5Hasher();
    }

    /**
     * @function Name testMD5HasherMake
     * @description Unfilled
     */
    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');
        $this->assertEquals($password, $passwordTwo);
    }

    /**
     * @function Name testMD5HasherMakeWithSalt
     * @description Unfilled
     */
    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passwordsalt');
        $passwordTwo = $this->hasher->make('password', ['salt' => 'salt']);
        $this->assertEquals($password, $passwordTwo);
    }

    /**
     * @function Name testMD5HasherCheck
     * @description Unfilled
     */
    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);
        $this->assertTrue($passwordCheck);
        //dev1 complete
    }

}

