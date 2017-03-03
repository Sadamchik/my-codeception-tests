<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage(MainPage::$urlMainPage);
$I->click(MainPage::$allNewsButton);
$I->seeInCurrentUrl(MainPage::$urlAllNews);
$I->click(MainPage::$firstNews);
$I->seeElement('.news-card-img');
$I->click(MainPage::$toMainPage);
$I->click(MainPage::$allArticlesButton);
$I->seeInCurrentUrl(MainPage::$urlAllArticles);
$I->click(MainPage::$firstArticle);
$I->seeElement('.news-card-img');
