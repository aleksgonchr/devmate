<?php

$I = new AcceptanceTester($scenario);

//вход на страницу
$I->amOnPage("/");

//переход к форме "Sign Up"
$I->click('Sign Up Now'); //нажать на "Sign Up Now"
$I->wait(2);
$I->click("#form-signup input[name=selling_outside_app_store]"); //установка чекбокса
$I->seeElement('#form-signup input[name=solution]'); //проверка наличия поля "solution"
$I->wait(2);
