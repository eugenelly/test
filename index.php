<?php

// PART 1
// Task 1
// Вывести цифры по порядку
echo '<h2>PART 1</h2>';
echo '<h3>Task 1</h3>';
$arrayNumbers = [
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
];

foreach ($arrayNumbers[0] as $number) {
    echo $number . ' ';
}

// Task 2
// Написать запрос для выборки данных из таблицы, где id = 10
echo '<h3>Task 2</h3>';
echo 'SELECT id FROM db_name.table_name WHERE id = 10';

// Task 3
// Вывести ключи и значение массива
echo '<h3>Task 3</h3>';
$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44'
];

// var_dump(array_keys($arrayInfo))
// var_dump(array_values($arrayInfo))
echo '<pre>';
foreach ($arrayInfo as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
}
echo '</pre>';

// Task 4
//Вывести месяца года
echo '<h3>Task 4</h3>';
$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь',
    ]
];

echo '<pre>';
foreach ($arrayMonth as $array) {
    foreach ($array as $monthId => $monthName) {
        echo $monthName . PHP_EOL;
    }
}
echo '</pre>';

// Task 5
// Дана информация в json формате, надо вывести ее.
echo '<h3>Task 5</h3>';
$json = '{"year":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';
$array = json_decode($json, true);
echo '<pre>';
print_r($array);
echo '</pre>';

// Task 6
// Дан код, нужно ответить на вопросы аргументировав свой ответ

echo '<h3>Task 6</h3>';
echo <<<END
<ol class="list">
    <li class="item">
        <!-- Будет ли выполнен запрос? -->
        Нет. В конструктор передаются не те параметры, нарушен порядок. Решение: \$conn = mysqli_connect(\$hostname, \$username, \$password, \$database);
    </li>
    <li class="item">
        <!-- Что сделает запрос? -->
        Выбирает все (*) столбцы из таблицы users
    </li>
    <li class="item">
        <!-- Написать запрос для удаления данных, где id пользователей равен одному из данных цифры = 1,2,3,4,5 -->
        DELETE FROM db_name.table_name WHERE id between 1 and 5;
    </li>
</ol>
END;

// Task 7
// Написать форму с одним из полей для ввода текста и кнопкой, по нажатию которой идет сохранение данных из поля в файл

if (isset($_POST['text']) && ($_POST['text'] !== '')) {
    file_put_contents('file.txt', htmlspecialchars($_POST['text']));
}

echo '<h3>Task 7</h3>';
echo <<<END
<form class="form" action="/index.php" method="post">
    <label>
        <input class="form__input" type="text" name="text">
    </label>
    <button class="form__btn" type="submit">Сохранить</button>
</form>
END;

// PART 2
// 1) В приведенном ниже коде закрашены: 1 метод, 1 тип данных, 2 оператора. Необходимо вставить вместо красных прямоугольников то, что вы считаете должно быть на их месте, исходя из ТЗ.
// Получить json с постами и вывести в консоль заголовок (title) поста, id которого равен 15.
echo '<h2>PART 2</h2>';
echo '<h3>Task 1</h3>';
echo <<<END
1: number
2: return
3: map
4: return
END;

// 2) В приведенном ниже коде закрашены: 1 тег списка, 1 значение атрибута, 2 семантических тега. Необходимо вставить вместо красных прямоугольников то, что вы считаете должно быть на их месте, исходя из ТЗ.
echo '<h3>Task 2</h3>';
echo <<<END
1: header
2: nav
3: ul (или ol)
4: image/webp
END;
