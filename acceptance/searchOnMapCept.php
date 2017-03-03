<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check main filters and redirect to Repair');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$searchOnMap);
$I->waitForElementVisible(MainPage::$fieldWhatNeedToRepair, 10);
//$I->click(MainPage::$fieldWhatNeedToRepair);
$I->fillField(MainPage::$fieldWhatNeedToRepair, 'диагностика');
//$I->click(MainPage::$selectorBrand);
//$I->moveMouseOver('#react-select-1--option-0 '); // работает!!!
//$I->click('#react-select-1--option-0 ');
$I->wait(1);
$I->click('#react-select-2--value');
$I->click('#react-select-2--option-0 ');
$I->wait(1);
$I->click('#react-select-3--value');
$I->click('#react-select-3--option-0 ');
$I->wait(1);
$I->click('#react-select-4--value');
$I->click('#react-select-4--option-0 ');
$I->wait(1);
$I->click('#react-select-5--value');
$I->click('#react-select-5--option-0 ');
$I->wait(1);
$I->click(MainPage::$findStoButton);
$I->wait(1);
$I->fillField(['name' => 'min'], 100);
$I->fillField(['name' => 'max'], 500);
$I->wait(1);
$I->click('#react-select-6--value');
$I->click('#react-select-6--option-0 ');
$I->wait(1);
$I->click('#react-select-7--value');
$I->click('#react-select-7--option-0 ');
$I->wait(1);
$I->click('#react-select-8--value');
$I->click('#react-select-8--option-0 ');
$I->wait(1);
$I->click('#react-select-9--value');
$I->click('#react-select-9--option-0 ');
$I->wait(1);
$I->wait(3);
$I->click(MainPage::$entryForRepairButton);
$I->wait(1);
$I->seeInCurrentUrl(MainPage::$urlNewBidPage);
$I->waitForElementVisible(MainPage::$folderBrand, 10);
$I->see('Acura', MainPage::$folderBrand);
$I->see('Диагностика', MainPage::$whatNeedToDo);