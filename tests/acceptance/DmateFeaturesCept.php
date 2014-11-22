<?php 
$I = new AcceptanceTester($scenario);

$I->amOnPage('/');
$I->click('Features'); //нажать на пункт меню "Features"
$I->seeCurrentUrlEquals('/features/frameworks'); //убедиться в том, что мы находимся на странице
$I->seeElement("img[alt=\"Sparkle-based updates framework\"]"); //убедиться в том. что требуемое изображение отображается
$I->makeScreenshot('Sparlke_based'); //выполнить скриншот
$I->amOnPage('/features/app-management'); //перейти на заданную страницу
$I->seeCurrentUrlEquals('/features/app-management'); //убедиться в том. что мы находимся на стребуемой странице
$I->seeElement("img[alt=\"Easy Updates\"]"); //убедиться в том, что требуемое изображение отображается на странице
$I->wait(2);
$I->makeScreenshot('Management_App');