<?php 
try{
    $I = new AcceptanceTester($scenario);
    $I->wantTo('to login to local.uremont.com');
    $I->amOnPage('/');
    $I->click(['link' => 'Войти']);
    $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)','fedor@konux.ruuremurem');
    $I->fillField('input.mobfix','123123');
    $I->click('.button.button_blue');
    $I->wait(1);
    $I->see('Выход','.menu_link.exit');

}catch(\Exception $e){

    if( $curl = curl_init() ) {  // do not forget change testing url
        curl_setopt($curl, CURLOPT_URL, 'http://test.uremont.com/onfailtest?type=6&result=0&access_token='.md5(date('Y-m-d')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        curl_close($curl);
    }


}