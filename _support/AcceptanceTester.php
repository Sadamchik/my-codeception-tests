<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

    public function logMeIn($name, $pass) {  // нихера не работает
        $I = $this;
        $I->amOnPage('/');
        $I->click(['link' => 'Войти']);
        $I->fillField('.panel > form:nth-child(3) > input:nth-child(2)', $name); // 'fedor@konux.ruuremurem'
        $I->fillField('input.mobfix', $pass); // '123123'
        $I->click('.button.button_blue');
        $I->wait(1);
        $I->see('Выход','.menu_link.exit');
    }

    public function fillAvtoDescription($mark, $model, $year, $text) {
        $I = $this;
        //$I->amOnUrl(MainPage::$urlMainPage);

        $I->click(['class' => 'chosen-single']);
        $I->fillField('#auto_chosen > div:nth-child(2) > div:nth-child(1) > input:nth-child(1)', $mark); // заполняем марку
        $I->click(['class' => 'chosen-results']);

        $I->wait(1);
        $I->click(['id' => 'model_chosen']);
        $I->fillField('#model_chosen > div:nth-child(2) > div:nth-child(1) > input:nth-child(1)', $model); // заполняем модель
        $I->click('#model_chosen > div:nth-child(2) > ul:nth-child(2) > li:nth-child(1)');

        $I->wait(1);
        $I->click(['id' => 'year_chosen']);
        $I->fillField('#year_chosen > div:nth-child(2) > div:nth-child(1) > input:nth-child(1)', $year);  // заполняем год выпуска
        $I->click('#year_chosen > div:nth-child(2) > ul:nth-child(2) > li:nth-child(1)');

        $I->fillField(['name' => 'text'], $text);
    }

    public function fillFieldOnPageForSto ($nameSTO, $emailSTO, $www, $address, $phone, $about) {
        $I = $this;

        $I->fillField(ForSTO::$fieldUserNameSTO, $nameSTO);
        $I->fillField(ForSTO::$fieldEmailSTO, $emailSTO);
        $I->fillField(ForSTO::$fieldSiteSTO, $www);
        $I->fillField(ForSTO::$fieldAdressSTO, $address);
        $I->fillField(ForSTO::$fieldPhoneSTO, $phone);
        //$I->click(ForSTO::$fieldDescriptionSTO);
        $I->fillField(ForSTO::$fieldDescriptionSTO, $about);
    }
}
