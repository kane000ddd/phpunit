<?php

/**
 * User
 * 
 * A user of the system
 */
Class User
{


    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Get the user's full name their first name and surname
     * 
     * @return string The user's full name
     */
    public function getFullName()
    {
        // trimは先頭or末尾の空白を取り除く関数
        return trim("$this->first_name $this->surname");
    }


}