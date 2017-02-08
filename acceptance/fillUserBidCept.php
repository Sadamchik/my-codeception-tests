<?php

try{
    $I = new AcceptanceTester($scenario);
    $I->wantTo('fill bid like user');
    $I->amOnPage('/');
    $I->click(['link' => 'Войти']);
    $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)','fedor@konux.ruuremurem');
    $I->fillField('input.mobfix','123123');
    $I->click('.button.button_blue');
    $I->wait(5);
    $I->click(['class' => 'newBidButton']);
    /*$I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[3]/button'); // все бренды
    $I->wait(2);
    $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[3]/div/div[2]'); // Acura
    $I->wait(2);
    $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[4]/div/div/ul/li[1]/span[2]'); // CL
    $I->wait(2);
    $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[5]/div/div/ul/li[1]'); // year of avto*/
    $I->fillField(['class' => 'todo'], 'Test fill new bid param pam pam');
    $I->fillField('input[id=datepicker]', date('d.m.Y')); //try func date()
    $I->fillField('input[id=my_price]', '100500');
    $I->click('.newbidForm-checkboxContainer label[for=evacuate]');
    $I->click('.newbidForm-checkboxContainer label[for=parts]');
    $I->click('.chosen-container');
    $I->wait(5);
    $I->click('//*[@id="region_chosen"]/div/ul/li[3]');
//$I->click(['id' => 'city_chosen']);
    $I->wait(5);
    $I->click('//*[@id="city_chosen"]');
    $I->wait(5);
    $I->click('//*[@id="city_chosen"]/div/ul/li[1]');
    $I->wait(5);
    $I->click('.sendform');
    $I->waitForElementVisible('.popup');
    $I->click('//*[@id="popup"]/div[3]/span');
    $I->click('.menu_link.exit');
    $I->wait(3);

}catch(\Exception $e){

    if( $curl = curl_init() ) { // do not forget change testing url
        curl_setopt($curl, CURLOPT_URL, 'http://test.uremont.com/onfailtest?type=6&result=0&access_token='.md5(date('Y-m-d')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        curl_close($curl);
    }


}