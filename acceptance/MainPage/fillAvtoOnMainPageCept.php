<?php
for ($i = 1; $i < 11; $i++) {
    $I = new AcceptanceTester($scenario);
    $I->wantTo('perform actions and see result');
    $I->amOnPage(MainPage::$urlMainPage);
    $I->fillAvtoDescription('bmw', 'X6', '2016', 'I wanna MM I wanna MM');
    $I->click(MainPage::$BidToAllService);
    $I->wait(3);
    echo "\n\t" . "It is test number" . $i . "\n";
}