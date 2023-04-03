// 1. Функция для вывода текущей даты в PHP:

function printDate() {
  echo date("Y-m-d");
}
printDate();

// 2. Функция для вывода текущей даты в соответствии с переданным форматом:

function printFormattedDate($format) {
  echo date($format);
}
printFormattedDate("F j, Y");


// 3. Функция для проверки четности числа:
function isEven($number) {
  if ($number % 2 == 0) {
    return true;
  } else {
    return false;
  }
}
echo isEven(10); // выводит true
echo isEven(7); // выводит false

// 4. Функция для проверки возраста:
function checkAge($age) {
  if ($age >= 18) {
    echo "Вы взрослый, можете голосовать";
  } else {
    echo "Чтобы можно было голосовать, осталось " . (18 - $age) . " года (лет)";
  }
}
checkAge(20); // выводит "Вы взрослый, можете голосовать"
checkAge(16); // выводит "Чтобы можно было голосовать, осталось 2 года (лет)"

// 3. Функция для определения максимального числа из нескольких переданных в параметрах:

function getMax(...$intValues) {
  $max = $intValues[0];
  foreach ($intValues as $num) {
    if ($num > $max) {
      $max = $num;
    }
  }
  return $max;
}
echo getMax(1, 3, 5, 2, 4); // выводит 5
