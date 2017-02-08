<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('click all buttons and links');

$I->amOnPage(MainPage::$urlMainPage);
//$I->click(MainPage::$instagramFooter);
$I->wait(2);
//$I->switchToNextTab();
$I->wait(2);
//$I->seeInCurrentUrl('/uremontcom');
$I->wait(2);

/*$I->click(MainPage::$vkFooter);
$I->seeInCurrentUrl();

$I->click(MainPage::$facebookFooter);
$I->seeInCurrentUrl();

$I->click(MainPage::$youTubeFooter);
$I->seeInCurrentUrl();*/