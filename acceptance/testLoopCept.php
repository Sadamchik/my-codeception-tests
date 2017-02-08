<?php 
for ($i=0; $i < 5; $i++) {
    $I = new AcceptanceTester($scenario);
        $I->wantTo('register user from bid');
        $I->amOnPage('/');
        $I->wait(1);
        $I->click(['class' => 'newBidButton']);
        $I->wait(1);
        $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[3]/button'); // все бренды
        $I->wait(1);
        $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[3]/div/div[2]'); // Acura
        $I->wait(1);
        $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[4]/div/div/ul/li[1]/span[2]'); // CL
        $I->wait(1);
        $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[2]/div[2]/div/div/div[5]/div/div/ul/li[1]');
        $I->fillField(['class' => 'todo'], 'Test reg user new bid');
        $I->fillField('input[id=datepicker]', '05.12.2016');
        $I->fillField('input[id=my_price]', '100500');
        $numb = rand(1000, 9999);
        $I->fillField(['name' => 'username'], 'Nikolay'.$numb);
        $I->fillField(['name' => 'email'], 'Nikolay@'.$numb.'.ru');
        $I->fillField(['name' => 'phone'], '8999123999'.$numb);
        $I->click('.registr_send');
        $I->wait(2);

        if( $curl = curl_init() ) {
                curl_setopt($curl, CURLOPT_URL, 'http://t.uremont.com/test/getcode?phone=8999123999'.$numb);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                $out = curl_exec($curl);
                $sms_code = json_decode($out)->code;
                curl_close($curl);
            }

        $I->fillField(['class' => 'sms_code'], $sms_code);
        $I->click('/html/body/div[2]/div[1]/div/div[2]/form/div[4]/div[2]/div/div/div[2]/div[3]/div[2]/div/button');
        $I->waitForElementVisible('//*[@id="popup"]');
        //$I->wait(2);
        $I->seeElement('//*[@id="popup"]');
        $I->click('//*[@id="popup"]/div[3]');
        //$I->waitForElement('.menu_link.exit',100);
        //$I->wait(3);
        $I->click('.menu_link.exit');
        $I->wait(3);
};
