<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$sendBid);
$I->click(MainPage::$showAllBrands);
$I->click(MainPage::$choseBrand);
$I->wait(2);
$I->click(MainPage::$choseModel);
$I->wait(2);
$I->click(MainPage::$choseYearOfBiuld);
$I->fillField(MainPage::$fieldVIN, '1231HSDKJ890JKS');
$I->fillField(MainPage::$whatNeedToDo, 'testing task');
$I->wait(2);
$I->fillField(MainPage::$fieldDateRepair, date('d.m.Y'));
$I->wait(2);
$I->fillField(MainPage::$fieldMyPrice, 123);
$I->wait(2);
$I->fillField(MainPage::$fieldUserName_newBid, 'Alex');

    $rand = rand(10000000000, 99999999999);

$I->fillField(MainPage::$fieldUserPhone_newBid, $rand);
$I->click(MainPage::$registerFromNewBidButton);

$I->waitForElementVisible('input[name=code]', 100);

if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://local.uremont.com/test/getcode?phone=' . $rand);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    print_r($out);
    $sms_code = json_decode($out)->code;
    curl_close($curl);
}
$I->fillField(UserReg::$fieldSmsCode, $sms_code);
$I->click(UserReg::$confirmRegButton);
$I->wait(2);
$I->waitForElementVisible('.popup');
$I->click('//*[@id="popup"]/div[3]/span');
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(UserProfile::$exitUserProfileButton);
$I->wait(3);