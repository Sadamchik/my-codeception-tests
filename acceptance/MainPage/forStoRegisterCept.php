<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$linkForSTO);
$I->seeInCurrentUrl(MainPage::$urlForSTO);
$I->click(ForSTO::$connectButtonForSTO);
$I->seeElement(ForSTO::$fieldDescriptionSTO);
$I->fillFieldOnPageForSto('SuperSTO', 'superSTO@qwe.qwe', 'www.super.sto', 'pushkina 23', '123124323123123', 'All about Us');
$I->wait(3);
$I->click(ForSTO::$dialerSTO);
$I->wait(3);
$I->click(ForSTO::$connectButtonOnRegFormSTO);
$I->wait(3);