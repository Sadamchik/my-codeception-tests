<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login like STO and edit profile');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$login);
$I->logMeIn('qwerwq@xcvx.cvbvcb', 123123);
$I->click(MainPage::$enterButton);
$I->waitForElementVisible(UserProfile::$exitUserProfileButton,100);
$I->click(StoProfile::$profileTab);
// сохраняем все значения полей, чтобы вернуть их после проверки редактирования
    $name = $I -> grabValueFrom(StoProfile::$fieldStoName);
    $email = $I -> grabValueFrom(StoProfile::$fieldStoEmail);
    $phone = $I -> grabValueFrom(StoProfile::$fieldStoPhone);
    $address = $I -> grabValueFrom(StoProfile::$fieldStoAddress);
    $about = $I -> grabValueFrom(StoProfile::$fieldStoAbout);
    $stoPhone = rand(1000000000, 9999999999);
$I->editStoContacts('123', 'meail@ruru.hihi', $stoPhone);
$I->wait(2);
$I->seeElement(StoProfile::$checkboxFormComfort);
$I->seeInFormFields(StoProfile::$checkboxFormComfort, [
    'telephone' => false,        // проверяем, что блок Удобства не содержит отмеченных чекбоксов
    'wifi' => false,
    'tvs' => false,
    'toilet' => false,
    'parking' => false,
    'evacuator' => false,
    'pay_card' => false
]);
$I->seeInFormFields(StoProfile::$checkboxFormInfo, [
    'mail_new' => true,
    'confirm_response' => false,  // проверяем дефолтные чекбоксы в форме инфо уведомлений
    'new_bid' => true,
    'mail_chat' => true,
    'mail_status' => true,
    'mail_record' => true,
]);
$I->seeInFormFields(StoProfile::$checkboxFormNotifySms, [
    'notify_sms' => false,
    'sms_bid' => true,
    'sms_chat' => true
]);
//$I->fillField('profile_new_pass1', '123123123123');
$I->seeElement(StoProfile::$saveChangesStoProfile);
$I->click(StoProfile::$saveChangesStoProfile);
$I->wait(2);
$I->reloadPage();
$I->wait(2);
$I->seeInFormFields(StoProfile::$fieldsFormContacts, [ // проверяем что все данные в полях сохранились
    'username' => '123',
    'email' => 'meail@ruru.hihi',
    'phone[]' => $stoPhone,
    'address' => 'Smirnovskaya 25',
    'about' => 'Uremont - the Best of the BEST!!!!',
    //'phone1' => 23742736472880999
]);

// возвращаем все измененнные поля в исходное состояние
$I->wait(2);
$I->fillField(StoProfile::$fieldStoName, $name);
$I->fillField(StoProfile::$fieldStoEmail, $email);
$I->fillField(StoProfile::$fieldStoPhone, $phone);
//$I->fillField(StoProfile::$fieldStoPhone2, '');
$I->fillField(StoProfile::$fieldStoAddress, $address);
$I->fillField(StoProfile::$fieldStoAbout, $about);
$I->click(StoProfile::$saveChangesStoProfile);

$I->wait(2);

