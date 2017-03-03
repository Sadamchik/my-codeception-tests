<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);

$I->click(MainPage::$login);
$I->see('Вход на сайт', MainPage::$textSiteEnter);
$I->logMeIn('fedor@konux.ruuremurem', '111');
$I->wait(2);
$I->click(MainPage::$enterButton);
//$I->waitForElementVisible(MainPage::$authError, 10);
$I->seeElement(MainPage::$authError);
    $errorLogin = $I->grabTextFrom(MainPage::$authError);
    echo "\n\t" . "При неверном пароле: " . $errorLogin . "\n";
$I->wait(1);
$I->click(MainPage::$toMainPage);

$I->click(MainPage::$login);
$I->see('Вход на сайт', MainPage::$textSiteEnter);
$I->logMeIn('fedor@konux.ruuremurem111', '123123');
$I->wait(1);
$I->click(MainPage::$enterButton);
//$I->waitForElementVisible(MainPage::$authError, 10);
$I->seeElement(MainPage::$authError);
    $errorLogin = $I->grabTextFrom(MainPage::$authError);
    echo "\n\t" . "При неверном пароле: " . $errorLogin . "\n";
$I->wait(1);
$I->click(MainPage::$toMainPage);


$I->click(MainPage::$login);
$I->see('Вход на сайт', MainPage::$textSiteEnter);
$I->logMeIn('fedor@konux.ruuremurem', '123123');
$I->wait(1);
$I->click(MainPage::$enterButton);
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(UserProfile::$exitUserProfileButton);
$I->wait(2);



/*$I->wait(2);
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(UserProfile::$exitUserProfileButton);
$I->wait(2);*/
