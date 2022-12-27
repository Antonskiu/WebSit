<?php
	include '../../php/doc.php';
?>
<link rel="stylesheet" type="text/css" href="../../css/html.css">
<style>
	section {
		padding: 1%;
		margin: 1.5%;
		font-size: medium;
		border: 7px solid #0071FF;
		border-radius: 10px;
		background: #489CDF;
	}
</style>
<?php
  include '../../php/link.php';
?>
<!-- Script -->
<?php
  include '../../php/nav.php';
?>


<div class="container">
<main>

	<section>

		<p class="center">Тексти</p>

		Текст</br>

		<p align="center/left/right">Текст по краям</p></br>

		<p align="center">Текст по центру</p></br>

		<p align="left">Лівий текст</p></br>

		<p align="right">Текст праворуч</p></br>

		<p align="justify">Цей тег призначений для тексту, який довший за один рядок і правильно центрований</p></br>

		<p contenteditable="true">текст інтересу</p></br>

		<p contenteditable="true">можна використовувати всюди</p></br>

		<p><abbr title="some">дивний текст</abbr></p></br>

		<h1>Level 1</h1>

		<h2>Level 2</h2>

		<h3>Level 3</h3>

		<h4>Level 4</h4>

		<h5>Level 5</h5>

		<h6>Level 6</h6>

		<b>занадто товстий</b></br>

		<strong>жирний шрифт</strong> </br>

		<big>збільшує розмір шрифту на 1</big></br>

		<small>зменшити шрифт на 1</small></br>

		<blockquote>виділяє текст</blockquote></br>

		<i>також курсив</i></br>

		<em>курсив</em></br>

		<u>підкреслення</u></br>

		<abbr>також підкреслення</abbr></br>

		<ins>підкреслення2</ins></br>

		<select>розкривний список</select></br>

		<option>спискове значення</option></br>

		<br>новий рядок</br></br>

		<p>текст в абзаці</p></br>

		<span>терміновий елемент</span></br>
		
		<del>закреслено</del></br>

		<font size="15">розмір тексту</font></br>

		<font color="#FB9500">колір</font></br>

		<font face="font name">123</font></br>

		<sub>шрифт нижчого порядку</sub></br>

		<sup>шрифт верхнього порядку</sup></br>

		<blockquote>цитата</blockquote>

	</section>


	<!-- <section>

		<p class="center">Посилання</p>

		<a href="https://www.youtube.com/">посилання</a></br>

		<a href="https://www.youtube.com/" target="_blank">посилання, яке завантажує посилання на нову сторінку</a></br>

		<a href="https://www.youtube.com/" target="_self">посилання, яке завантажить сторінку в поточному вікні</a></br>

		<a href="https://www.youtube.com/" target="_parent">завантажує сторінку в батьківський фрейм, якщо фреймів немає, це значення працює як _self</a></br>
		
		<a href="https://www.youtube.com/" target="_top">скасовує всі фрейми та завантажує сторінку в повному вікні веб-переглядача. Якщо фреймів немає, це значення працює як _self</a ></br>
		
		<a href="https://www.youtube.com/" title="На youtube">посилання з підписом при наведенні</a></br>
		
		<a href="mailto:toxaantoxa2000@gmail.com?subject:Тime">посилання на пошту з mailto: mail + ? + subject=тема повідомлення</a>
	
	<section> -->


	<div>блок з інформацією</div></br>
	

	<textarea id="id" name="name" rows="4" cols="50">тег для збору інформації за допомогою інших мов</textarea></br>
	

	<section class="my">

		<p class="center">Власний тег</p>

		<script>document.createElement("my")</script>

		<my>My</my>

	</section>


	<p>вибір<select>

		<option>Варіанти</option>
		<option>сам вибір</option>
		<option>сам вибір</option>

	</select></p>


	<video class="video" width="40%" height="10%" controls autoplay>

		<source src="../../video/1.mp4" type="video/mp4">

	</video></br>


	<audio class="audio" controls>

		<source src="../../audio/1.mp3" type="audio/mp3">

	</audio>


	<section class="img_linl">

		<p class="center">Картинка зі всіма підписами</p>

		<p><a href="https://www.youtube.com/"><img src="https://imgs.search.brave.com/sBH-Wn-xyWHTjI9R5KG8UDM8jzbdU9iYxRIUmw4zAys/rs:fit:772:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5H/N1NkRDU0amZxZHVV/cjJyczloeDVnSGFF/aiZwaWQ9QXBp" alt="Підпис при наведенні" title="Назва"></a></p></br>


		<p class="center">Просто картинка</p>

		<a href="https://www.youtube.com/"><img src="https://imgs.search.brave.com/Cdb5uda0Ey5QUUeKPQNjN_ui9jPa45DoM-Nfl4yt4rA/rs:fit:952:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC4z/RV9DYjRaYVNvTXZo/YV95bVNnWWlnSGFE/cyZwaWQ9QXBp"></a>
	
	</section>

	<section>

		<p class="center">Списки</p>

		<div class="row">

			<div class="col">

				<ol type="1">

					<li>нумераційний список</li>
					<li>Арабські цифри</li>
					<li>Перший пункт</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>

			<div class="col">

				<ol type="1" reversed>

					<li>Нумераційний список</li>
					<li>Арабські цифри</li>
					<li>Перший пункт</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>


			<div class="col">

				<ol type="A">

					<li>Список нумерації</li>
					<li>Великі літери латинського алфавіту</li>
					<li>Перший абзац</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>


			<div class="col">

				<ol type="a">

					<li>Список нумерації</li>
					<li>Малі латинські літери</li>
					<li>Перший абзац</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>


			<div class="col">

				<ol type="I">

					<li>Список нумерації</li>
					<li>Великі римські цифри</li>
					<li>Перший абзац</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>

		</div>


		<div class="row">

			<div class="col">

				<ol type="i">	

					<li>Список нумерації</li>
					<li>Римські цифри в нижньому регістрі</li>
					<li>Перший абзац</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>


			<div class="col">

				<ol type="I" start="8">

					<li>Список нумерації</li>
					<li>Римські цифри в нижньому регістрі</li>
					<li>Ви можете вказати, з якого числа починати</li>
					<li>Другий абзац</li>
					<li>Третій абзац</li>

				</ol>

			</div>


			<div class="col">

				<ul type="disc">

					<li>позначений список із крапкою</li>
					<li>x</li>
					<li>c</li>

				</ul>

			</div>


			<div class="col">

				<ul type="circle">

					<li>позначення списку незаповненою крапкою</li>
					<li>x</li>
					<li>c</li>

				</ul>

			</div>


			<div class="col">

				<ul type="square">

					<li>позначення списку заповненим квадратом</li>
					<li>x</li>
					<li>c</li>

				</ul>

			</div>


			<div class="col">
				
				<ul contenteditable="true">

					<li>a</li>
					<li>x</li>
					<li>c</li>

				</ul>

			</div>

		</div>

	</section>


	<section>

		<p class="center">Цитати</p>

		<dl>

		  <dt>Термін 1</dt>

			<dd>Термін 1 - визначення 1</dd>

		<dt>Термін 2</dt>

			<dd>Термін 2 - визначення 2</dd>

		</dl></br>

	</section>


	<section>

		<p class="center">Таблиці</p>

		<div class="row">

			<div class="col">

				<table>

					<tr>
						<td>Перша лінія</td>
						<td>Вася</td>
						<td>16</td>
					</tr>

					<tr>
						<td>Друга лінія</td>
						<td>Антон</td>
						<td>15</td>
					</tr>

				</table>

			</div>


			<div class="col">

				<table border="1">

					<tr>
						<td>Перша лінія</td>
						<th>жирне</th>
						<td>Вася</td>
						<td>16</td>
					</tr>


					<tr>
						<td>Друга лінія</td>
						<td>Антон</td>
						<td>15</td>
					</tr>

				</table>

			</div>



			<div class="col">

				<table>

					<tr>Стільниця</tr>
					<tr>1</tr>
					<th>Заголовок таблиці</th>
					<tr>2</tr>
					<tr>3</tr>

					<td>Нижня частина таблиці</td>
					<td>1</td>
					<th>або просто жирний</th>
					<td>2</td>
					<td>3</td>

				</table>

			</div>

			<!-- стандарт HTML5 -->
			<div class="col">
				<table>

					<thead>

						<tr>
							<th>Ім'я</th>
							<th>Рік</th>
						</tr>

					</thead>

					<tbody>

						<tr>
							<td>Антон</td>
							<td>15</td>
						</tr>

					</tbody>

				</table>

			</div>

		</div>

	</section>


	<p class="center">поставити скрізь "name"</p>


	<section>
		
		<p class="center">Для людей з обмеженими можливостями</p>

		<p>В основі використовуется альретнативи відчутям</p>

		<ul>
			<li>зір - слух</li>
			<li>моторика - зір</li>
			<li>моторика - слух</li>
			<li>слух - зір</li>
		</ul>

		<p>Також вся інформація повинна бути доступна текстом</p>

		<!-- https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Attributes/aria-activedescendant -->

		<p>aria-description - опис елементу</p>

		aria-label - короткий опис елементу

		for - допомагаж надати порядок дій

		<p>role - позначення будь якої ролі</p>

	</section>


	<section>

		<p class="center">Створення форм</p>

		<form class="br"> 

			<label>

				<p>Ім'я: <input name="name" placeholder="Ваше ім'я"></p>
			</label>

		</form>


		<p>Так такой можливо</p>

		<form class="br">

			<label for="12">

				<input id="12" type="text">

			</label>

		</form>


		<form class="br" id="myform">

			<p><input type="text" name="text1" placeholder="Впишіть текст"></p>

			<p><input type="text" name="text2" placeholder='autofocus="autofocus"'></p>

			<p class="on">або так</p>

			<p><input type="text" name="text3" placeholder="autofocus"></p>

			<p><input type="submit" name="submit" value="Відправити" required></p>

			<p>зручна заміна java<input type="text" name="text4" pattern="[0-9]"></p>

			<datalist id="colors">

				<option>Червоний</option>
				<option>Голубий</option>
				<option>Жовтий</option>
				<option>Зелений</option>

			</datalist>

			<p>підказки</p>

			<p>Автозаповнення: <input type="text" name="text5" list="colors"></p>

		</form>


		<p>Буде надіслано разом із формою, яку ми зв’язали: <input type="text" form="myform" name="text6"></p>


		<form action="файл куди буде відправленно" method="GET - отримвти данні POST - відправити данні">

			<p>Ім'я: <input name="name"></p>

			<p>Пароль: <input type="password"></p>

			<p>Залишатися в онлвйні: <input type="checkbox"></p>
			
			<p><input type="button" value="Кнопка"></p>

			<p>Виберіть колір: <input type="color"></p>

			<p>Напишіть дату: <input type="date"></p>

			<p>Місцева дата: <input type="datetime-local"></p>

			<p>Пошта: <input type="email"></p>

			<p>Виберіть файл: <input type="file"></p>

			<p>Прихований: <input type="hidden"></p>

			<p>Виберіть картинку: <input type="image"></p>

			<p>Виберіть місяць: <input type="month"></p>

			<p>Виберіть число: <input type="number"></p>

			<p>Жінка: <input type="radio" name="sex" value="maile"></p>

			<p>Чоловік: <input type="radio" name="sex" value="femaile"></p>

			<p><input type="range" min="1" max="1000" step="10"></p>

			<p><input value="видалити" type="reset"></p>

			<p>Пошук: <input type="search"></p>

			<p>Дата подачі: <input type="submit" value="text"></p>

			<p>Телефон: <input type="tel"></p>

			<p>Текст: <input type="text"></p>

			<p>Час: <input type="time"></p>

			<p>Посилання: <input type="url"></p>

			<p>Тиждень: <input type="week"></p>

		</form>

		<p class="center">Перевірка</p>

		<form action="http://google.com" куда отправлять на проверку или для простой проверки тупо гугл>

			<label>
				<p>Ім'я: <input required - отправка на проверку type="text" placeholder="Введіть ваше ім'я"></p>
			</label></br>

			<label>
				<p>По-батькві: <input type="text" placeholder="Введіть ваше по-батькві"></p>
			</label></br>

			<label>
				<p>Пароль: <input type="text" placeholder="Введіть ваш пароль"></p>
			</label></br>

			<label>
				<p>Пошта: <input required type="email" placeholder="Введіть вашу пошту"></p>
			</label></br>

			<p><input type="submit" value="Відправити"></p>

			<select>

				<option>Вибір</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>

			</select>
		</form>

	</section>


	<section>
		<p class="center">Синематика</p>
		<p>article - важливе повідомлення</p>
		<p><li>section - звичайна стаття з текстом та картиноками яких може бути багато</li></p>
		<p>aside - відокремленні деталі</p>
		<p>details - по іншому стилізовані деталі</p>
		<p>figure - окрема самодостатня стаття</p>
		<p><li>figcaption - підпис для цієї статті</li></p>
		<p>footer - нижня частина сайту/статті</p>
		<p>header - верхня частина сайту/статті</p>
		<p>main - основне значення документа</p>
		<p>mark - виділення тексту</p>
		<p>nav - навішація по сайту/статті</p>
		<p>summary - деталі які доповнюются текстом нижче</p>
		<p>time - час</p>
 

		<p class="center">Приклади</p>

		<section>
			<h3>Не дуже важливе</h3>
		</section>

		<article>
			<h1>Важливе</h1>
		</article>


		<section>
			<nav>Посилання</nav>
			<header><h1>Верхня частина</h1></header>
			<main><h3>Основна <mark>частина</mark></h3></main>
			<footer><h6>Нижня частина</h6></footer>
		</section>


		<section>
			<aside style="float: right; display: block;">Щось</aside>
		</section>


		<figure>
			<img src="../../../img/Ninja.jpeg">
			<figcaption>Підпис</figcaption>
		</figure>

		<details>
			<summary>Epcot Center</summary>
				<p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
		</details>

	</section>

	<section>

		<p class="center">Метаінформація - те, що не буде відображатися на сторінці</p>

		<p>шифрування - meta charset="UTF-8"</p>

		<p>ви можете вказати ключові слова, за якими ви зможете знайти сайт на кількох мовах і поділитися ним - meta name="опис контенту на сайті" land="ua" content="ключові слова сайту"</p>
		
		
		<p>можливість перезавантаження сторінки, а потім перенаправлення на інші сторінки - meta http-equiv="refresh" content="1; https://www.youtube.com/"</p>
		<p>Назва сайту - title Ім'я /title</p>

	</section>
	
	<section>
		
		<p>поставте колір фотографії та тексту на весь сайт color="#BA6DB2", щоб фоном стала картинка body bgcolor="#269DD9" text="#000000"</p>
		
		<p>тіло сайту - що буде відображатися на сторінці</p>
		
		<p>якщо фото є в папці з файлом HTML, то можна просто вказати ім'я файлу</p>

	</section>

	<section>

		<font><marquee behavior="alternate">(Что-то) - alternate</marquee></font>

		<font><marquee behavior="scroll">(Что-то) - scroll</marquee></font>

		<font><marquee behavior="slide">(Что-то) - slide</marquee></font>



		<font><marquee directoin="right">(Что-то) - right</marquee></font>

		<font><marquee directoin="left">(Что-то) - left</marquee></font>

		<font><marquee directoin="up">(Что-то) - up</marquee></font>

		<font><marquee directoin="down">(Что-то) - down</marquee></font>



		<font><marquee behavior="alternate" directoin="right">(Что-то) - alternate-right</marquee></font>

		<font><marquee behavior="scroll" directoin="left">(Что-то) - scroll-left</marquee></font>

		<font><marquee behavior="slide" directoin="up">(Что-то) - slide-up</marquee></font>

		<font><marquee behavior="slide" directoin="down">(Что-то) - slide-down</marquee></font>

	</section>

</main>
</div>
</body>
<html>