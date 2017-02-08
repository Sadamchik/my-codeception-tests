<?php

try{
    $I = new AcceptanceTester($scenario);
    $I->wantTo('test user registration process');
    $I->amOnPage('/');
    $I->seeElement('.registrationLi');
    $I->click(['link' => 'Регистрация']);
    $I->seeInCurrentUrl('/user/reg');
    $number = rand(100,9999);
    $I->fillField(['css' => 'input[id=regform-name]'], 'Ivan'.$number);
//$I->wait(3); // Заменить эти вейты на waitForElementVisible для зелененькой рамки
    $I->waitForElement(\Codeception\Util\Locator::combine('input[id=regform-name]','.inputSuccess'),10);
    $I->fillField(['css' => 'input[id=regform-email]'], 'Konstantin@mail'.$number.'.ru');
    $I->waitForElement(\Codeception\Util\Locator::combine('input[id=regform-email]','.inputSuccess'),10);
    $I->fillField(['css' => 'input[id=regform-phone]'], '98764632'.$number);
    $I->waitForElement(\Codeception\Util\Locator::combine('input[id=regform-phone]','.inputSuccess'),10);
    $I->wait(2); //do not work without this wait
    $I->click('//*[@id="user_reg_form"]/button');
    $I->waitForElementVisible('input[name=code]',100);
//$I->waitForElementVisible(['css' => 'input[name=code]'],10);

//$I->wait(3);
    if( $curl = curl_init() ) {
        curl_setopt($curl, CURLOPT_URL, 'http://t.uremont.com/test/getcode?phone=98764632'.$number);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        print_r($out);
        $sms_code = json_decode($out)->code;
        curl_close($curl);
    }

    $I->fillField(['class' => 'sms_code'], $sms_code);
    $I->click('//*[@id="sms_form"]/div/div/div[2]/button');
    $I->wait(2);
    $I->waitForElementVisible('.exit',100);
    $I->click('.menu_link.exit');
    $I->wait(2);

}catch(\Exception $e){

    if( $curl = curl_init() ) {  // do not forget change testing url
        curl_setopt($curl, CURLOPT_URL, 'https://test.uremont.com/onfailtest?type=6&result=0&access_token='.md5(date('Y-m-d')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        curl_close($curl);
    }


}