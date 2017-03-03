<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$register);

    $rand = rand(10000000000, 99999999999);

$I->registerUser('Alex', $rand);
$I->waitForElementVisible('input[name=code]',100);

if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://local.uremont.com/test/getcode?phone=' . $rand);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    print_r($out);
    $sms_code = json_decode($out)->code;
    curl_close($curl);
}
$I->fillField(MainPage::$fieldSmsCode, $sms_code);
$I->click(MainPage::$confirmRegButton);
$I->wait(2);
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(UserProfile::$exitUserProfileButton);
$I->wait(3);
