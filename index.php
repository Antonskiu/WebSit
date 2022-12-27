<?php
	include 'php/doc.php';
?>
<!-- link -->
<?php
  include 'php/link.php';
?>
<!-- Script -->
<?php
  include 'php/nav.php';
?>


<!-- Ссылки роботы -->

  <div class="container about">
		<img width="100%" style="opacity: 1;" src="img/1.jpg">

    <div class="swiper mySwiper">
      <div style="margin-top: 20%;" class="swiper-wrapper">
        <div class="swiper-slide">HTML <br> HTML5</div>
        <div class="swiper-slide">Js<br> JQuery</div>
        <div class="swiper-slide">CSS <br> Bootstrap 5.0 <br> Animation <br> Adaptive layout <br> Miscellaneous effects</div>
        <div class="swiper-slide">PHP <br> MySQL <br> Wordpress</div>
        <div class="swiper-slide">Python <br> DJango</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

	</div>

</body>
</html>