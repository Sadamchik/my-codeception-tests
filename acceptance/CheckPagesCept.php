<?php 

try{
    $I = new AcceptanceTester($scenario);
    $I->wantTo('check all site pages');
    $I->amOnUrl('/');
//$I->wait(2);
    $I->click(['link' => 'Поиск на карте']);
    $I->seeElement('button',['type' => 'button'],['class' => 'AppSearch-filter-button']);
    $I->seeInCurrentUrl('/search');
//$I->wait(2);
    $I->seeElement('.logo_block a');
    $I->waitForElementVisible('.logo_block a');
    $I->click(['class' => 'logo']);
//$I->wait(1);
    $I->click(['link' => 'Все новости']);
    $I->seeInCurrentUrl('/news');
    $I->click(['class' => 'logo']);
    $I->click(['link' => 'Для автосервисов']);
    $I->seeInCurrentUrl('/forsto');
//$I->wait(2);
    $I->click(['class' => 'logo']);
    $I->click(['link' => 'Контакты']);
    $I->seeInCurrentUrl('/contacts');
//$I->wait(2);
    $I->click(['class' => 'logo']);
    $I->click(['class' => 'banner_place_moreinfo']);
    $I->seeInCurrentUrl('/4996?tab=sto_sales');
    $I->wait(2);

}catch(\Exception $e){

    if( $curl = curl_init() ) {  // do not forget change testing url
        curl_setopt($curl, CURLOPT_URL, 'http://test.uremont.com/onfailtest?type=6&result=0&access_token='.md5(date('Y-m-d')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        curl_close($curl);
    }


}