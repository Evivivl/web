<?php
    $db = mysqli_connect('localhost', 'admin', '1','university');
    #echo $_GET['name'];
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
                <div class="header_Logo">МПГУ</div>
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
        <section class="find">
            <form action="http://infsis/sessions/">
                <label for="name">Поиск по фамилии студента:</label>
                <input type="text" id="name" name="name" size="10" />
                <button onclick="window.location.href = 'http://infsis/sessions' + document.getElementById("name");">Поиск</button>
                <button onclick="window.location.href = 'http://infsis/sessions';">Показать список всех студентов</button>
            </form>
        </section>
        <section class="main">
            <table>
                <tr>
                    <th>Код сессии</th>
                    <th>Название предмета</th>
                    <th>Фамилия преподавателя</th>
                    <th>Имя преподавателя</th>
                    <th>Отчетсво преподавателя</th>
                    <th>Экзамен\зачет</th>
                    <th>Дата</th>
                    <th>Оценка</th>
                    <th>Номер зачетной книги</th>
                    <th>Фамилия студента</th>
                    <th>Имя студента</th>
                    <th>Отчество студента</th>
                    <th>Код специальности</th>
                    <th>Название специальности</th>
                </tr>
                <?php
                    $tabl = '';
                    if(isset($_GET['name']))
                    {
                        $sql = "
                            SELECT
                                Code_Session
                                ,su.Name as sub_name
                                ,t.Name as teach_name
                                ,t.Surname as teach_surname
                                ,t.Surname_2 as teach_surname2
                                ,Exam
                                ,Date
                                ,Rate
                                ,st.Number_book
                                ,st.Surname as stud_surname
                                ,st.Name as stud_name
                                ,st.Surname_2
                                ,sg.`Group`
                                ,sg.Speciality
                            from `session` AS s
                            LEFT JOIN student AS st ON st.Number_book = s.Number_book
                            LEFT JOIN subjects AS su ON su.Id = s.Id_subjects
                            LEFT JOIN teacher AS t ON t.Number = s.Id_Teacher
                            LEFT JOIN student_group AS sg ON sg.Code_group = s.Code_group
                            where st.Surname like '%".$_GET['name']."%'
                        ";
                        
                    }
                    else
                    {
                        $sql = '
                            SELECT
                                Code_Session
                                ,su.Name as sub_name
                                ,t.Name as teach_name
                                ,t.Surname as teach_surname
                                ,t.Surname_2 as teach_surname2
                                ,Exam
                                ,Date
                                ,Rate
                                ,st.Number_book
                                ,st.Surname as stud_surname
                                ,st.Name as stud_name
                                ,st.Surname_2
                                ,sg.`Group`
                                ,sg.Speciality
                            from `session` AS s
                            LEFT JOIN student AS st ON st.Number_book = s.Number_book
                            LEFT JOIN subjects AS su ON su.Id = s.Id_subjects
                            LEFT JOIN teacher AS t ON t.Number = s.Id_Teacher
                            LEFT JOIN student_group AS sg ON sg.Code_group = s.Code_group
                        ';
                    }
                        $result = mysqli_query($db,$sql) or die (mysqli_error());
                        while($row = mysqli_fetch_array($result))
                        {  
                            $tabl .= '<tr>';
                                $tabl .= '<td>' . $row['Code_Session'] .'</td><td>'. $row['sub_name'] .'</td><td>'. $row['teach_surname'] .'</td><td>'. $row['teach_name'] .'</td><td>'. $row['teach_surname2'] .'</td><td>'. $row['Exam'] .'</td><td>' . $row['Date'] .'</td><td>'. $row['Rate'] .'</td><td>'. $row['Number_book'] .'</td><td>'. $row['stud_surname'] .'</td><td>'. $row['stud_name'] .'</td><td>'. $row['Surname_2'].'</td><td>'. $row['Group'].'</td><td>'. $row['Speciality'];
                            $tabl .= '</tr>';
                        }
                    echo $tabl;
                ?>
            </table>
        </section>
    </div>
</body>
</html>