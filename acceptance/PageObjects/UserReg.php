<?php

/**
 * Created by PhpStorm.
 * User: bsc-204-033
 * Date: 10/2/17
 * Time: 3:27 PM
 */
class UserReg
{
    // page /user/reg
    public static $fieldUserName = ['name' => 'RegForm[name]'];
    public static $fieldPhoneUser = ['name' => 'RegForm[phone]'];
    public static $regUserButton = ['class' => 'regformbutton'];
    public static $fieldSmsCode = ['name' => 'code'];
    public static $confirmRegButton = ['class' => 'sms_send'];

    public static $fieldStoName = ['name' => 'name'];
    public static $fieldStoEmail = ['name' => 'email'];
    public static $fieldStoSite = ['name' => 'url'];
    public static $fieldStoAddress = ['name' => 'address'];
    public static $fieldStoPhone = ['name' => 'phone[]'];
    public static $fieldStoDescription = ['name' => 'about'];
    public static $regStoButton = ['class' => 'regservice'];
}