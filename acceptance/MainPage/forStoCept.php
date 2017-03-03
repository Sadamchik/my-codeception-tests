<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check page for STO');
// check links  in header
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$linkForSTO);
$I->seeInCurrentUrl(MainPage::$urlForSTO);
$I->click(ForSTO::$contactsForSTO);
$I->wait(3);
$I->scrollTo(['class' => 'logo_block']);
$I->click(ForSTO::$whatProfitForSTO);
$I->wait(3);
$I->scrollTo(['class' => 'logo_block']);
$I->click(ForSTO::$connectForSTO);
$I->wait(3);
$I->scrollTo(['class' => 'logo_block']);
$I->click(ForSTO::$howDoesItWorkForSTO);
$I->wait(3);
$I->scrollTo(['class' => 'logo_block']);
$I->click(ForSTO::$aboutUsForSTO);
$I->scrollTo(['class' => 'logo_block']);
$I->click(ForSTO::$connectButtonForSTO);
$I->wait(3);