<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login like sto and see main page');
$I->amOnPage('/');
$I->click(MainPage::$login);
$I->logMeIn('qwerwq@xcvx.cvbvcb', 123123);
$I->click(MainPage::$enterButton);
$I->seeInCurrentUrl('/profile?tab=profile_service_bids');
$I->click('.tab_head > ul:nth-child(1) > li:nth-child(4)'); // click Price-lists
$I->wait(1);
$I->checkOption('#\31 ');
$I->wait(1);
$I->checkOption('#\33');
$I->wait(1);
$I->checkOption('#\35');
$I->wait(1);
$I->checkOption('#\38');
$I->wait(1);
$I->checkOption('#\31 0');
$I->wait(1);
$I->fillField('.priceEditsaleswhy__settings > ul:nth-child(2) > li:nth-child(1) > p:nth-child(2) > input:nth-child(1)', 30);
$I->fillField('.priceEditsaleswhy__settings > ul:nth-child(2) > li:nth-child(2) > p:nth-child(2) > input:nth-child(1)', 55);
$I->wait(1);
$I->fillField(['name' => 'price[3][7][title][0][]'], 'пизда движку');
$I->wait(1);
$I->click('div.pricelist:nth-child(1) > div:nth-child(1)');
$I->click('#price-box-div-1 > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > ul:nth-child(1) > li:nth-child(1)');
$I->click('li.active-result:nth-child(5)');
$I->wait(1);
//$I->fillField('//*[@id="table_1"]/div[2]/div[1]/div[2]/div/div/input', 1000);
// //*[@id="table_1"]/div[2]/div[54]/div[2]/div/div/input
for ($i = 2; $i <= 54; $i++) {
    $I->fillField('//*[@id="table_1"]/div[2]/div[' . $i . ']/div[2]/div/div/input', rand(100, 9999));
    $I->wait(1);
}
$I->click('.priceEdit__saved > button:nth-child(1)');
$I->wait(3);