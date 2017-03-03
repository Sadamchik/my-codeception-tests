<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$register);
$I->registerSTO('name');
$I->wait(1);
$I->click(MainPage::$regStoButton);
$I->wait(2);
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(UserProfile::$exitUserProfileButton);
$I->wait(3);

