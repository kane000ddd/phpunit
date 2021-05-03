<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        require 'User.php';
        // Userクラスからインスタンスを宣言
        $user = new User;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals("Teresa Green", $user->getFullName());
    }

    public function testFullNameEmptyByDefault()
    {
        $user = new User;
        // 空のインスタンスの場合のテスト
        $this->assertEquals('', $user->getFullName());
    }

    //以下の記述を前につければtestとみなされ実行可能になる

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals("Teresa", $user->first_name);
    }

    public function testTrueIsTrue()
    {
        $this->assertTrue(true, true);
    }
}