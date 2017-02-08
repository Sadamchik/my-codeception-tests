<?php

/**
 * Created by PhpStorm.
 * User: bsc-204-033
 * Date: 3/2/17
 * Time: 6:12 PM
 */
$I = new AcceptanceTester($scenario);
$I->logMeIn('fedor@konux.ruuremurem', '123123');
$I->wait(3);