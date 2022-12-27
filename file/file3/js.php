<?php
    include '../../php/doc.php';
?>
<link rel="stylesheet" type="text/css" href="../../css/js.css">
<?php
  include '../../php/link.php';
?>
<script defer type="text/javascript" src="script.js"></script>
<?php
  include '../../php/nav.php';
?>
<div class="container">
	<p class="center">Основні зняння для освоення мови</p>
    <p>Джава стрипт має обмеження у 41 число його можна зняти додавши N</p>
    <p>Підключення - script defer src="js.js" /script</p>
    <p>Звичайний комент - // комент</p>
    <p>Зручніщий комент - /* комент */</p>
    <p>Для сприйняттям мовою лапок як просто текст треба перед лапками поставити - /</p>
    <p>Написання в консолі - console.log("Hello World!")</p>
    <p>Для виведення одніеї букви console.log("Hello World!", [2])</p>
    <p>Для використання змінних у змінних треба заключити їх у {} та їх потрі заключати в зворотні лапки</p>
    <p>Якщо в числі більше 64 числе то повернется нескінченнсть <small>велику кількість нулів можна записати у "e"</small></p>

    <div class="cont">
    	<p class="center">Змінні</p>
    	<p>Let - не може бути об'явленна знову та при виклику її в блоку вона буде првцювати лише у цьому блоку</p>
    	<p>Var - може бути використана до її об'явлення<blockquote></br> x = "1230"</br> console.log(x)</br> var x </br> console.log(x)</blockquote></p>
    	<p>Const - цю змінну не можна змінювати<blockquote></br>var x = "1230"</br> console.log(x)</br>y = `123 ${x}`</br> console.log(y)</blockquote></p>
    </div>

    <div class="cont">
    	<p class="center">Методи</p>
    	<p>console.log("text") - вивід в строку</p>
    	<p>alert("text") - повідомлення зверху екрану на який ви можете лише натиснути "ok"</p>
    	<p>prompt("text", "default") - поле в який треба написати текст та можна задати текст за замовчуванням</p>
    	<p>toFixed(n) - округлення до числа</p>
    	<p>toString(2/4/8/16...) - можна побочити число в заданій системі числення<blockquote></br>var x = 123</br> num.toString(2/4/8/16...)</br> console.log(x)</blockquote></p>
    </div>

    <p>x.toString() - переведення в інший тип числення</p>

    <div class="cont">
    	<p class="center">Округлення</p>
    	<p>Math.floor - в меншу сторону</p>
    	<p>Math.ceil - в більшу</p>
    	<p>Math.round - звичайне</p>
    	<p>Math.trunc - видалення долбної частини</p>
    </div>

    <div class="cont">
    	<p class="center">Перетворення</p>
    	<p>String(x) - на строку</p>
    	<p>Number(x) - на число</p>
    	<p>Boolean(x) - на булево</p>
		<p>При неможливості щось порівняти видае NaN</p>
		<p>typeof(a) - тип змінної</p>
		<blockquote><p>При порівнянні операторів вони перетворюются null = "0"<sub>("null" >= 0) null == undefined - true</sub>, "undefined" = NaN</p></blockquote>
    </div>

    <p><small>бінарний +/- - звичайний</small></p>
    <p><small>унарний +/- - який використовуется як знак(-2)</small></p>
	
	<p>Бінарний "+" використовуется для додавання чисел та речень, спочатку додае числа потім речення та якщо одне значення є реченням то всі подальщі значення будуть як речення</p>
	<p>Інші оператори перетворюють всі реченная на числа та робить дії вже з числами</p>
	<p>Якщо використати унарний "+" до речення то воно стане числом <blockquote>var x = "2"</br>console.log(+x) // 2</blockquote></p>
	<p>Для скорочення обчислень можна використовувати -=/+=/*=//= - цю операцію називають також присвоювання <small>якщо в реченні зустрічаются звичайні арифметичні дії та арифметичні дії з присвоюванням, то спочатку виконуются звичайні арифметичні дії, та потім операція присвоення</small></p>

	<div class="cont">
		<p class="center">Інкримент/Дикримент</p>
		<p>Інкримент - a++ - додає 1 до чила</p>
		<p>Дикримент - a-- - додає 1 до чила</p>
		<p>інкримент та дикримет можна використовувати зі всіх сторін</p>
		<p>++x - спочатку додается одиниця, а потім використовуется змінна</p>
		<p>x++ - спочатку використовуется змінна, а потім додатется одиниця</p>
	</div>

	<div class="cont">
		<p class="center">Оператори порівняння</p>
		<p>AND(та) (&)</p>
		<p>OR(або) (|) </p>
		<p>NOT(ні) (~)</p>
		<p>Для порівняння рядків використовуется побуквенне порівня</p>
		<p>При порівнянні чисел та рядків все перетворюется на числа</p>

		<blockquote>
			<p class="center">Побітові оператори порівняння</p>
			<p>LEFT SHIFT(зрушення в ліво) (<<)</p>
			<p>RIGHT SHIFT(зрушення в право) (>>)</p>
			<p> ZERO-FILL RIGHT SHIFT(зрушення в право з заповненням нулями) (>>>)</p>
		</blockquote>
	</div>

	<p>Оператор "," дозволяе виконувати декілка розрахунків в одній змінній та має низький прирітет</p>

	<div class="cont">
		<p class="center">Функції</p>
		<blockquote>
			<table>
				<tr>
					<td>let func = function(аргументи) {</td>
					<p>Якщо аргумент один то можна не ставити душки</p>
				</tr>

				<tr>
					<td></td>
					<td>код;</td>
				</tr>

				<tr>
					<td></td>
					<td>}</td>
				</tr>
        	</table>
		</blockquote>
		<p>або</p>
		<blockquote>
			<p>let func = function(аргументи) => код;</p>
		</blockquote>
	</div>

	<div class="cont">
		<p class="center">Массиви</p>
		<blockquote>
			<table>
				<tr>
					<td>let x = [</td>
				</tr>

				<tr>
					<td></td>
					<td>"red",</td>
				</tr>

				<tr>
					<td></td>
					<td>"green",</td>
				</tr>

				<tr>
					<td></td>
					<td>"pink",</td>
				</tr>

				<tr>
					<td></td>
					<td>"orange",</td>
				</tr>

				<tr>
					<td></td>
					<td>"yellow",</td>
				</tr>

				<tr>
					<td></td>
					<td>"purple",</td>
				</tr>

				<tr>
					<td></td>
					<td>"brown"</td>
				</tr>

				<tr>
					<td></td>
					<td>]</td>
				</tr>
        	</table>
		</blockquote>
		<p>Або</p>
		<blockquote><p>let ar = new Array()</p></blockquote>
		<p>Взяття елементу массиву - ar[0]</p>
		<p>Зміна массиву - ar[0] = "no"</p>
		<p>Додавання елементу в кінці массиву - ar.push("wite")</p>
		<p>Додавання елементу на початку массиву - ar.unshift("Name")</p>
		<p>Вирізання останній елемент массиву - var = ar.pop()</p>
		<p>Вирізання вирізае перший елемент массиву - var = ar.shift()</p>
		<p>Для визначення індуксу - var = ar.indexOf("Name")</p>
	</div>
	

    <script type="text/javascript">
    	
    </script>

</div>
</body>
</html>