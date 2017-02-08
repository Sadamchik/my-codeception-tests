<?php

try{
    $I = new AcceptanceTester($scenario);
    $I->wantTo('test registration process');
    $I->amOnPage('/');
    $I->seeElement('.registrationLi');
    $I->click(['link' => 'Регистрация']);
    $I->seeInCurrentUrl('/user/reg');
    $number = rand(100,9999);
    $I->fillField(['name' => 'name'], 'Konstantin'.$number);
    $I->fillField(['name' => 'email'], 'Konstantin@mail'.$number.'.ru');
    $I->fillField(['name' => 'url'], 'Konstantin'.$number.'.ru');
    $I->click(['name' => 'address']);
    $I->fillField(['name' => 'address'], 'Рос');
    $I->wait(5);
    $I->seeElement('.ui-autocomplete');
    $I->click(['class' => 'ui-menu-item']);
    $I->fillField(['name' => 'phone[]'], '987654321'.$number);
    $I->fillField(['name' => 'about'], 'It is all about Konstantin');
//$I->click(['css' => 'input[type=checkbox]']);
    $I->click(['class' => 'dealer']);
    $I->wait(5);
    $I->click(['class' => 'regservice']);
    /*$I->wait(25);
    $I->click('Выход','.menu_link.exit');*/
//
//$I->pressKey(\Facebook\WebDriver\WebDriverKeys::ARROW_DOWN);
    $I->wait(5);
    $I->waitForElement('.menu_link.exit',1000);
    $I->click('.menu_link.exit');
    $I->wait(5);

}catch(\Exception $e){

    if( $curl = curl_init() ) {  // do not forget change testing url
        curl_setopt($curl, CURLOPT_URL, 'https://test.uremont.com/onfailtest?type=6&result=0&access_token='.md5(date('Y-m-d')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        curl_close($curl);
    }


}