<?php
const CONSTANT1 = '80';
const CONSTANT2 = '23';
const CONSTANT3 = '40';

echo '<h2>1. Представимся</h2>';
$name = 'Даниил';
$age = 27;
echo "Меня зовут $name<br>";
echo "Мне $age лет<br>";
echo '“!|\\/’”\\';
echo '<h2>2. Посчитаем количество рисунков, выполненных красками</h2>';
echo "Всего рисунков ".CONSTANT1.", карандашами ".CONSTANT2.", фломастерами ".CONSTANT3;
$paints=CONSTANT1-CONSTANT2-CONSTANT3;
echo "<br>Красками выполненно $paints рисунков<br>";
echo '<h2>3. Кому уже пора отдыхать</h2>';
$age2 = 100;
echo 'Введенное количество лет: '.$age2."<br>";
if (65 > $age2 && $age2 > 17){
    echo 'Вам еще работать и работать';
}elseif ($age2 > 65 && $age2 < 110){
echo 'Вам пора на пенсию';
}elseif ($age2 < 17 && $age2 > 1){
echo 'Вам еще рано работать';
}else {
    echo 'Неизвестное значение!!!';
}
echo '<h2>4. Рабочие и выходные дни недели</h2>';
$day = 5;
echo "<br>Вы выбрали день $day<br> Этот день рабочий/нерабочий:";
switch ($day) {
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
    echo "Это рабочий день";
    break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
echo "<br>";
echo '<h2>5. Про автомобили</h2>';
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'door' => 5,
    'year' => 2015,
];
$opel = [
    'model' => 'Zafira',
    'speed' => 125,
    'door' => 5,
    'year' => 2018,
];
$toyota = [
    'model' => 'Corolla',
    'speed' => 150,
    'door' => 5,
    'year' => 2018,
];
$array = [
        'bmw' => $bmw,
        'Opel' => $opel,
        'Toyota' => $toyota,
];

foreach ($array as $key => $item) {
    echo '<br>Марка машины '.$key;
    echo '<br>Модель: ' . $item['model'] . ". Характеристики авто: ";
    echo $item['speed'] . 'км/ч | ';
    echo $item['door'] . 'дверей | ';
    echo $item['year'] . 'г. ';
}

echo '<h2>6. Посчитаем</h2>';

echo '<table border="1">';
echo "<tr>";
for ($s = 1; $s <= 10; $s++){
    echo "<td>$s</td>";
}
echo '<tr>';
for ($r = 2; $r <= 10; $r++) {
    echo "<tr><td>$r</td>";
    for ($k = 2; $k <= 10; $k++) {
        if($k%2 == 0 && $r%2 == 0) echo "<td>(". $k * $r .")</td>";
        else echo "<td>[". $k * $r ."]</td>";
    }
    echo '</tr>';
}

echo '</table>';

