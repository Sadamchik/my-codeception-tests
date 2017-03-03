<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('login STO and answer first bid');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$login);
$I->logMeIn('qwerwq@xcvx.cvbvcb', 123123);
$I->click(MainPage::$enterButton);
$I->wait(2);
$I->seeElementInDOM(StoProfile::$bidListItem);
/*$I->seeElement(StoProfile::$answerCount); как нибудь запилить проверку количества ответов по заявке
    $count = $I -> grabTextFrom(StoProfile::$answerCount);*/
//$I->click(StoProfile::$answerCount);
$I->waitForElement(StoProfile::$openLetter, 10);
$I->click(StoProfile::$openLetter);
$I->click(StoProfile::$answerButton);
$I->wait(3);
//$I->waitForElement(['id' => 'popup'], 10);
//$I->click(StoProfile::$confirmPayButton);
$I->seeInCurrentUrl(StoProfile::$urlStoMessages);
$I->wait(3);
$I->fillField(StoProfile::$fieldStoMessage, 'HEY how are you?');
/*try{
    $I->seeElement(StoProfile::$messageBlockSto);
    $I->stoFirstAnswer(111, 222, 'Our price!');
}
catch (\Exception $e){
    $I->reloadPage();
    $I->waitForElement(StoProfile::$fieldStoMessage, 10);
    $I->fillField(StoProfile::$fieldStoMessage, ' ERROR!');
}*/
$I->click(StoProfile::$sendMessageButton);
$I->seeElement('.message-text');
$text = $I -> grabTextFrom('.message-text');
if ($text = 'HEY how are you?') {
    echo "IT IS WORK \n\r";
}
$I->see('HEY how are you?', '.message-text');
$I->wait(3);