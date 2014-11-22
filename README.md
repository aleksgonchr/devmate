devmate
=======
automation tests
Запуск предпологается на OS Windows

1.	предустановленная JDK, и прописан путь в переменной среды
2.	предустановленный PHP, и прописан путь в переменной среды
3.	скачать selenium-server-standalone с http://www.seleniumhq.org/download/
4.	перейти в дерикторию где находиться скачаный файл selenium-server-standalone и открыть консоль
5.	в консоли запустить команду: java -jar selenium-server-standalone-2.xx.xxx.jar
6.	скачать с репозитория файлы с тестами
7.	перейти в дерикторию куда скачали файлы с тестами, открыть новую консоль и запустить тесты командой: php codecept.phar run --steps --html
8.	репорт генерируется в виде html страницы и находиться в папке \tests_output
9.	скриншоты генерируются в папке \tests_output\debug\
10.	код тестов находиться в папке \tests\acceptance\ в файлах: DmateSignupCept.php и DmateFeaturesCept.php

