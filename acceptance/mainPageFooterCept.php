<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->scrollTo(MainPage::$blockFooter);

$I->seeElementInDOM(MainPage::$instagramFooter);
$I->seeElementInDOM(MainPage::$vkFooter);
$I->seeElementInDOM(MainPage::$facebookFooter);
$I->seeElementInDOM(MainPage::$youTubeFooter);

$I->seeElementInDOM(MainPage::$searchOnMapFooter);
$I->click(MainPage::$searchOnMapFooter);
$I->seeElement(MainPage::$extendSearch);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$sendBidFooter);
$I->click(MainPage::$sendBidFooter);
$I->seeInCurrentUrl(MainPage::$urlNewBidPage);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$tariffesFooter);
$I->click(MainPage::$tariffesFooter);
$I->seeInCurrentUrl(MainPage::$urlTariffes);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$agreement);
$I->click(MainPage::$agreement);
$I->seeInCurrentUrl(MainPage::$urlAgreement);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$privacy);
$I->click(MainPage::$privacy);
$I->seeInCurrentUrl(MainPage::$urlPrivacy);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$siteMap);
$I->click(MainPage::$siteMap);
$I->seeInCurrentUrl(MainPage::$urlSiteMap);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$howDoesItWorks);
$I->click(MainPage::$howDoesItWorks);
$I->seeInCurrentUrl(MainPage::$urlHowDoesItWorks);
$I->click(MainPage::$toMainPage);

$I->seeElementInDOM(MainPage::$faq);
$I->click(MainPage::$faq);
$I->seeInCurrentUrl(MainPage::$urlFaq);
$I->click(MainPage::$toMainPage);

$I->wait(2);
