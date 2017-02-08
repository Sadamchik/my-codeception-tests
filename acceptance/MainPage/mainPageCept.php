<?php
for ($i=1; $i < 2; $i++) {
    $I = new AcceptanceTester($scenario);
    $I->wantTo('click all buttons and links');

    $I->amOnPage(MainPage::$urlMainPage);
    $I->click(MainPage::$searchMainPage); // страница поиска
    $I->waitForElementVisible(MainPage::$extendSearch, 100);
    $I->seeElement(MainPage::$extendSearch);
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$login);
    $I->amOnPage(MainPage::$urlLoginPage); // страница Войти
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$register);
    $I->amOnPage(MainPage::$urlRegisterPage); // страница Регистрации
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$sendBid);
    $I->amOnPage(MainPage::$urlNewBidPage); //страница заполнения заявки
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$numberOfSTO);
    $I->waitForElementVisible(MainPage::$extendSearch, 100);
    $I->seeElement(MainPage::$extendSearch); // клик по кол-ву автосервисов
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$numberOfclients);
    $I->amOnPage(MainPage::$urlClientsFeedbacks);  // клик по количеству клиентов
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$BidToAllService);
    $I->amOnPage(MainPage::$urlNewBidPage);  // заявка во все сервисы
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$searchOnMap);
    $I->seeElement(MainPage::$extendSearch); // кнопка поиск на карте
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$bannerEntryForRepair);
    $I->amOnPage(MainPage::$urlNewBidPage);   // записываемся на ремонт по акции
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$bannerActionDetails);
    $I->seeInCurrentUrl(MainPage::$urlSTOactions);  // просматриваем текущую акцию на ремонт
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$lookForPriceOnMap);
    $I->seeElement(MainPage::$searchOnMap2); // как работает юремонт - кликаем Ищите сервисы по цене на карте
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$createBidToAllService);
    $I->seeElement(MainPage::$createBidForRepair);  // как работает юремонт - кликаем Создайте заявку во все сервисы
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$allNewsButton);
    $I->seeInCurrentUrl(MainPage::$urlAllNews);  //  все новости
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$allArticlesButton);
    $I->seeInCurrentUrl(MainPage::$urlAllArticles); //  все статьи
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$allFeedbacksButton);
    $I->seeInCurrentUrl(MainPage::$urlAllFeedbacks); //  все отзывы
    $I->click(MainPage::$toMainPage);
//$I->wait(2);

    $I->click(MainPage::$allServicesButton);
//$I->wait(2);
    $I->seeInCurrentUrl(MainPage::$urlAllServices); //  все сервисы
    $I->click(MainPage::$toMainPage);

    $I->click(MainPage::$linkContacts);
    $I->seeInCurrentUrl(MainPage::$urlContacts); // контакты
    $I->click(MainPage::$toMainPage);


    $I->wait(1);
    echo "\n\t" . "It is test number" . $i . "\n";
}

