<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('test multisession');
$nick = $I->haveFriend('nick'); Locator
$nick->does(function(AcceptanceTester $I) {
    $I->amOnPage('/user/enter');
    $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)','gleb-dobrov@yandex.ruurem');
    $I->fillField('input.mobfix','123123');
    $I->click('.button.button_blue');
});
$tick = $I->haveFriend('tick');
$tick->does(function(AcceptanceTester $I) {
    $I->amOnPage('/user/enter');
    $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)','gleb-dobrov@yandex.ruurem');
    $I->fillField('input.mobfix','123123');
    $I->click('.button.button_blue');
});
$rick = $I->haveFriend('rick');
$rick->does(function(AcceptanceTester $I) {
    $I->amOnPage('/user/enter');
    $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)','gleb-dobrov@yandex.ruurem');
    $I->fillField('input.mobfix','123123');
    $I->click('.button.button_blue');
});

