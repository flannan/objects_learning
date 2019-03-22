<?php /** @noinspection ForgottenDebugOutputInspection */
declare(strict_types=1);



namespace test;

//use test;
//use Circle;

include_once __DIR__ . '/Circle.php';
include_once __DIR__ . '/Random.php';
include_once __DIR__ . '/UrlInterface.php';
include_once __DIR__ . '/Url.php';
include_once __DIR__ . '/Square.php';
include_once __DIR__ . '/SquaresGenerator.php';


echo 'testing Circle class' . PHP_EOL;
$circle = new Circle(10);
echo $circle->getArea() . PHP_EOL;
echo $circle->getCircumference() . PHP_EOL;

echo 'testing Random class' . PHP_EOL;

$seq = new Random(100);
$result1 = $seq->getNext();
$result2 = $seq->getNext();

echo ($result1 !== $result2) . PHP_EOL; // => true

$seq->reset();

$result21 = $seq->getNext();
$result22 = $seq->getNext();

echo ($result1 === $result21) . PHP_EOL; // => true
echo ($result2 === $result22) . PHP_EOL; // => true

echo 'testing Url class' . PHP_EOL;
$url = new Url('http://yandex.ru?key=value&key2=value2');
echo $url->getScheme() . PHP_EOL; // http
echo $url->getHost() . PHP_EOL; // yandex.ru
var_export($url->getQueryParams());
echo PHP_EOL;
// [
//     'key' => 'value',
//     'key2' => 'value2'
// ];
echo $url->getQueryParam('key') . PHP_EOL; // value
// второй параметр - значение по умолчанию
echo $url->getQueryParam('key2', 'lala') . PHP_EOL; // value2
echo $url->getQueryParam('new', 'ehu') . PHP_EOL; // ehu



echo 'testing Square class' . PHP_EOL;
$square = new Square(10);
echo $square->getSide() . PHP_EOL; // 10

echo 'testing SquaresGenerator class' . PHP_EOL;
$squares = SquaresGenerator::generate(3, 3);
var_export($squares);
