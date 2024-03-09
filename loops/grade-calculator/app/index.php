<?php

    // Функция проверки
    function validateInput($input) {
      if (empty($input)) {
        return false;
      }
    
      if (!is_numeric($input)) {
        return false;
      }
      if(!preg_match('/\b([0-9]|10)\b/', $input)){
        return false; 
      }
      return true;
    }
    
    // Проверка, отправлена ли форма
    if (isset($_GET['first']) && isset($_GET['second']) && isset($_GET['third'])) {
    
      // Валидация ввода
      if (validateInput($_GET['first']) && validateInput($_GET['second']) && validateInput($_GET['third'])) {
    
        // Преобразование значений в числа с плавающей запятой
        $first = (float)$_GET['first'];
        $second = (float)$_GET['second'];
        $third = (float)$_GET['third'];
    
        // Вычисление среднего значения
        $average = ($first + $second + $third) / 3;
    
        // Форматирование чисел
        $formatted_first = number_format($first, 1, '.', '');
        $formatted_second = number_format($second, 1, '.', '');
        $formatted_third = number_format($third, 1, '.', '');
        $formatted_average = number_format($average, 1, '.', ''); // Округляем до 1 знака после запятой
    
        // Вывод результата
        echo "1: {$formatted_first}, 2: {$formatted_second}, 3: {$formatted_third}. Результат: {$formatted_average}";
    
      } else {
        // Отображение сообщения об ошибке
        echo "Введены неверные данные. Пожалуйста, введите числа.";
      }
    }
    
    ?>
    
    <form action="/index.php" method="GET">
      <input required title="Введите первое число" type="text" name="first" />
      <input required title="Введите второе число" type="text" name="second" />
      <input required title="Введите третье число" type="text" name="third" />
      <button type="submit">OK</button>
    </form>


<!-- var2 -->

<?php

// Проверка, отправлена ли форма
if (isset($_GET['first']) && isset($_GET['second'])  && isset($_GET['third'])) {
if (!empty($_GET['first']) && !empty($_GET['second']) && !empty($_GET['third'])){
  // Валидация ввода
  if (is_numeric($_GET['first']) && preg_match('/^[0-9]+$/', $_GET['first']) && is_numeric($_GET['second']) && preg_match('/[0-10]/', $_GET['second']) && is_numeric($_GET['third']) && preg_match('/[0-10]/', $_GET['third'])) {

    // Преобразование значений в числа с плавающей запятой
    $first =$_GET['first'];
    $second =$_GET['second'];
    $third = $_GET['third'];

    // Вычисление среднего значения
    $average = ($first + $second + $third) / 3;

    // Форматирование чисел
    $formatted_first = number_format($first, 1, '.', '');
    $formatted_second = number_format($second, 1, '.', '');
    $formatted_third = number_format($third, 1, '.', '');
    $formatted_average = number_format($average, 1, '.', ''); // Округляем до 1 знака после запятой

    // Вывод результата
    print( "1: {$formatted_first},2:{$formatted_second},3:{$formatted_third } Результат: {$formatted_average}");
}
  } else {
    // Отображение сообщения об ошибке
    print("Введены неверные данные. Пожалуйста, введите числа от 0 до 10.");
  }
}

?>

<form action="/index.php" method="GET">
  <input required title="Введите первое число" type="text" name="first" />
  <input required title="Введите второе число" type="text" name="second" />
  <input required title="Введите третье число" type="text" name="third" />
  <button type="submit">OK</button>
</form>
