<?php
    $db = mysqli_connect('localhost', 'admin', '1','university');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="css/style.css">
    <title>Студенты</title>
</head>
<body>
    <header class = "header">
        <div class="container">
            <div class="header_inner">
                <div class="header_Logo">МПГУ Список студентов</div>
                <nav class="nav"> 
                    <a class ="nav_link" href="/">О нас</a>
                    <a class="nav_link" href="http://infsis/subjects">Предметы</a>
                    <a class="nav_link" href="http://infsis/teachers">Преподаватели</a>
                    <a class="nav_link" href="http://infsis/students">Студенты</a>
                    <a class="nav_link" href="http://infsis/groups">Группа</a>
                    <a class="nav_link" href="http://infsis/sessions">Сессия</a>
                </nav>
            </div>
        </div>
    </header>
    
    <div class="intro">     
        <section class="main">
            <table>
                <tr>
                    <th>Номер зачетной книги</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчетсво</th>
                    <th>Индекс</th>
                    <th>Улица</th>
                    <th>Номер дома</th>
                    <th>Номер квартиры</th>
                    <th>Номер телефона</th>
                </tr>
                <?php
                    $tabl = '';
                    $sql = 'select * from student';
                    $result = mysqli_query($db,$sql) or die (mysqli_error());
                    while($row = mysqli_fetch_array($result))
                    {  
                        $tabl .= '<tr>';
                            $tabl .= '<td>' . $row['Number_book'] .'</td><td>'. $row['Surname'] .'</td><td>'. $row['Name'] .'</td><td>'. $row['Surname_2'] .'</td><td>'. $row['Index'] .'</td><td>' . $row['Street'] .'</td><td>'. $row['Number_Home'] .'</td><td>'. $row['Number_apart'] .'</td><td>'. $row['Number_Phone'] .'</td>';
                        $tabl .= '</tr>';
                    }
                    echo $tabl;
                ?>
            </table>
        </section>
    </div>
</body>
</html>