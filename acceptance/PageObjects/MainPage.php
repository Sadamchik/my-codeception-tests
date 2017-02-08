<?php
    class MainPage {
        public static $urlMainPage = '/';
        public static $searchMainPage = 'li.search:nth-child(7) > a:nth-child(1)'; //поиск на карте
        public static $login = 'li.exit:nth-child(6) > a:nth-child(1)';
        public static $register = 'li.registrationLi:nth-child(5) > a:nth-child(1)';
        public static $sendBid = '.newBidButton';
        public static $toMainPage = '.logo_block_image';
        public static $extendSearch = 'button.AppSearch-filter-button:nth-child(8)';
        public static $numberOfSTO = '.head__icons--width';
        public static $numberOfclients = 'p.head__p:nth-child(2) > a:nth-child(1) > span:nth-child(2)';
        public static $urlClientsFeedbacks = '/#clientfeedbacks';
        public static $BidToAllService = '.actionNewbid';
        public static $searchOnMap = '.actionSearch';
        public static $urlNewBidPage = '/bid/newbid';
        public static $urlLoginPage = '/user/enter';
        public static $urlRegisterPage = '/user/reg';
        public static $bannerEntryForRepair = '.banner_place_addbid > button:nth-child(1)';
        public static $bannerActionDetails = '.banner_place_moreinfo';
        public static $urlSTOactions = 'tab=sto_sales';
        public static $lookForPriceOnMap = 'button.button-gray:nth-child(2)';
        public static $searchOnMap2 = 'div.how-steps:nth-child(5) > div:nth-child(2) > button:nth-child(1)';
        public static $createBidToAllService = 'button.button-gray:nth-child(1)';
        public static $createBidForRepair = 'div.how-steps:nth-child(4) > div:nth-child(2) > button:nth-child(1)';
        public static $allNewsButton = ['link' => 'Все новости'];
        public static $urlAllNews = '/news';
        public static $allArticlesButton = ['link' => 'Все статьи'];
        public static $urlAllArticles = '/articles';
        public static $allFeedbacksButton = 'header.item-header:nth-child(2) > a:nth-child(2)';
        public static $urlAllFeedbacks = '/servicefeedbacks';
        public static $allServicesButton = ['link' => 'Все сервисы'];
        public static $urlAllServices = '/allservices';
        public static $linkForSTO = ['link' => 'Для автосервисов'];
        public static $urlForSTO = '/forsto';
        public static $linkContacts = ['link' => 'Контакты'];
        public static $urlContacts = '/pages/contacts';

        // Footer elements
        public static $blockFooter = '.allcontent > footer:nth-child(4)'; // social
        public static $instagramFooter = ['class' => 'footerSocial-item--inst'];
        public static $vkFooter = ['class' => 'footerSocial-item--vk'];
        public static $facebookFooter = ['class' => 'footerSocial-item--fb'];
        public static $youTubeFooter = ['class' => 'footerSocial-item--you'];

        public static $searchOnMapFooter = 'div.colum:nth-child(2) > ul:nth-child(2) > li:nth-child(1) > a:nth-child(1)'; //uremont
        public static $sendBidFooter = 'div.colum:nth-child(2) > ul:nth-child(2) > li:nth-child(2) > a:nth-child(1)';
        public static $tariffesFooter = 'div.colum:nth-child(2) > ul:nth-child(2) > li:nth-child(4) > a:nth-child(1)';
        public static $urlTariffes = '/pages/tariffes';

        public static $agreement = 'div.colum:nth-child(3) > ul:nth-child(2) > li:nth-child(1) > a:nth-child(1)'; // information
        public static $urlAgreement = '/pages/agreement';
        public static $oferta = 'div.colum:nth-child(3) > ul:nth-child(2) > li:nth-child(2) > a:nth-child(1)';
        public static $urlOferta = '/pages/rules';

        public static $privacy = 'div.colum:nth-child(3) > ul:nth-child(2) > li:nth-child(3) > a:nth-child(1)';
        public static $urlPrivacy = '/pages/privacy';
        public static $siteMap = 'div.colum:nth-child(3) > ul:nth-child(2) > li:nth-child(4) > a:nth-child(1)';
        public static $urlSiteMap = '/sitemap.html';

        public static $howDoesItWorks = 'div.colum:nth-child(4) > ul:nth-child(2) > li:nth-child(2) > a:nth-child(1)';
        public static $urlHowDoesItWorks = '/pages/howitworks';
        public static $faq = 'div.colum:nth-child(4) > ul:nth-child(2) > li:nth-child(3) > a:nth-child(1)';
        public static $urlFaq = '/pages/faq';

        // page allservices
        public static $fieldSearchSTO = ['name' => 'search'];
        public static $searchSTOButton = 'span.icon-icons_magnifer:nth-child(2)';
        public static $findOutCostRepairButton = 'div.service_left_item:nth-child(3) > div:nth-child(2) > form:nth-child(4) > button:nth-child(6)';

    }