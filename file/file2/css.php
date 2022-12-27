<?php
    include '../../php/doc.php';
?>
<link rel="stylesheet" type="text/css" href="../../css/css.css">
<?php
  include '../../php/link.php';
?>
<!-- Script -->
<?php
  include '../../php/nav.php';
?>
<div class="container">
    <div class="ani">
        <p><a style="text-decoration: none;" href="/New/file/file2/Animated/HTML.php">Анімації</a></p>
        <p class="center">Фішки</p>
        <p><a href="/New/file/file2/Chips/smile.php">Посмішка</a></p>
        <p><a href="/New/file/file2/Chips/Paralaks/HTML.php">Паралакс</a></p>
        <p><a href="/New/file/file2/Chips/Figure/HTML.php">Фігури</a></p>
        <p><a href="/New/file/file2/Chips/Text in picture/HTML.php">Текст у картинках</a></p>
        <p><a href="/New/file/file2/Chips/Text on picture/HTML.php">Текст налазить на картинку</a></p>
        <p><a href="/New/file/file2/Chips/Hover up/HTML.php">Текст збільшуется при навдінні на картинку</a></p>
    </div>
    <div id="st">
        <p class="center q">В теге style можно вставлять CSS стили</p>

        <p class="per">Структура батьків - css_style_in_HTML_element->element->class->id</p>
        
        <table class="tb1">
            <tr>
                <td>style</td>
            </tr>

            <tr>
                <td></td>
                <td>slector {</td>
            </tr>

            <tr>
                <td></td>  
                <td></td>
                <td>color:blue</td>
            </tr>

            <tr>
                <td></td>
                <td>}</td>
            </tr>

            <tr>
                <td>/style</td>
            </tr>
        </table>
    </div>

    <h1 style="color: #e86f3a;">Використання CSS в HTML теге</h1>

    <div class="cont">
            <p>При вказанні назви тегу змінювати всі елементи з цим тегом</p>

            <p>Для уточнення треба вкаувати через <strong>></strong></p>

            <p>Для змін id треба вказувати через <strong>#</strong></a></p>

            <p>Для змін class треба вказувати через <strong>.</strong></p>

            <div class="code">
                <p>Для змін якогось елемента з його атрибутом:</p>

                <blockquote><table class="tb">
                    <tr>
                        <td>[href="https://www.youtube.com/"] {</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>color: red</td>
                    </tr>

                    <tr>
                        <td>}</td>
                    </tr>
                </table></blockquote>

                <p><a>Та номером:</a></p> 
                <blockquote><table class="tb">
                    <tr>
                        <td>ul:nth-of-type(2) {</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>color: red</td>
                    </tr>

                    <tr>
                        <td>}</td>
                    </tr>
                </table></blockquote>
            </div>
    </div>

    <div class="cont">
        <p class="center">Шрифти</p>
        <p>Стиль шрифту: font-family: 'Comforter', cursive;</p>
    </div>

    <div class="cont">
        <p class="center">Розмір тексту</p>
        <p>Розмір шрифту: font-wight: 400; або font-size: 50px;</p>
        <div class="code"> 
            <p class="center">У відсотках</p>
            <p>Звичайно - font-size: 100%;</p>
            <p>Від розмірів вікна - font-size: 20vw;</p>
        </div>
        <p>По стандарту 16px також можливо настроить в body font-size: 2.0em;</p>
        <p>Вага - font-weight: bold/normal</p>
    </div>

    <div class="cont">
        <p class="center">Роміри</p>
        <p>Розмір - width: 1000px;</p>
        <p>Ширина - heith: 1000px;</p>
        <p>Також все можно у відсотках</p>
    </div>

    <div class="cont">
        <p class="center">Текст</p>
        <p>Рівняння тексту - text-align: right/center/left;</p>
        <p>Відстань між рядками - line-height: 2;</p>
        <p>Підкресленний текст - text-decoration: underline;</p>
        <p>Перекресленний текст - text-decoration: line-throught;</p>
        <p>Відсутність стилю - text-decoration: none;</p>
        <p>Колір тексту - color: red;</p>
    </div>

    <div class="cont">
        <p class="center">Позиція</p>
        <p>Стандартна позиція - position: static;</p>
        <p>При встановленні цього значення та вказання нижче змін позиції елемента воно будет зміщено на вказані параметри - position: relative;</p>
        <p>Треба вказати позицію - position: fixed;</p>
        <p>Позиція відносно іншого елемента - position: absolute;</p>
        <p>При вказанні позиції прилипне туди та буде статичний поки він на вказаній позиції, а якщо ні, то буде у вказаній частині екрану - position: sticky;</p>
        <p>Властивість - при якій можна вказати у яку частину екрану буде встановленно елемента - float: right/left;</p>
    </div>

    <div class="cont">
        <p class="center">Посилання</p>
        <p><span class="blue">Сине посилання</span> - посилання на яке ще не переходили</p>
        <p><span class="fiol">Фіолетове посилання</span> - посилання по якому переходили</p>
    </div>

    <div class="cont">
        <p class="center">Задній фон</p>
        <p>Просто - background:#000000;</p>
        <p>По rgba - background:rgb(0, 0, 0);</p>
        <p>Прозорість у кінці - background:rgba(0, 0, 0, 0.5);</p>
        <p>За посилання - background:url(посилання);</p>
    </div>

    <div class="cont">
        <p class="center">Відступи</p>
        <p>Всередині - padding: 0px;</p>
        <p>Назовні - margin: 0px;</p>
        <p>Можна вказувати по сторонам додаючи через тире напрям або просто рохуючи зліва</p>
    </div>

    <div class="cont">
        <p class="center">Кордони</p>
        <p>Просто лінія - border: 1px solid red;</p>
        <p>Рисочками - border: 1px solid red;</p>
        <p>Крапами - border: 1px dotted red;</p>
    </div>

    <div class="cont">
        <p>При наведенні - .class:hover</p>
    </div>

</div>
</body> 
</html>