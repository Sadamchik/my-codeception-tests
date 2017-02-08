<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check search on page /allservices');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$allServicesButton);
$I->seeInCurrentUrl(MainPage::$urlAllServices);
$I->fillField(MainPage::$fieldSearchSTO, 'test');
$I->click(MainPage::$searchSTOButton);
$I->see('Test', 'div.service_left_item:nth-child(3) > div:nth-child(2) > a:nth-child(1)');
$I->click(MainPage::$findOutCostRepairButton);
$I->seeInCurrentUrl(MainPage::$urlNewBidPage);
