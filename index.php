
<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' type='text/css' href='design.css'/>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
</head>
<div id = "top" class="myElement">
    <p class="contact" style="margin-left: 110px; margin-top: 5px">Busygin Alexey</p>
    <div id="top_button_about_me" class="button_top">About me</div>
    <div id="top_button_my_works" class="button_top">My works</div>
    <div id="top_button_my_contacts" class="button_top">My contacts</div>
</div>
<div id="first">
      <div class="button-head">
            <div class="main-container">
                <section>

                    <a href="https://github.com/Alexx280"> <button class="btn btn-green btn-fill-vert button">GitHub</button></a>
                    <a href="http://www.freecodecamp.com/alexx280"><button class="btn btn-blue btn-fill-vert button">FreeCodeCamp</button></a>
                    <a href="http://tomsk.hh.ru/resume/3bbf0c1cff0259bdfb0039ed1f373562374b56"><button class="btn btn-purple btn-fill-vert  button">Resume</button> </a>
                    <a href="http://www.intuit.ru/verifydiplomas/100752444"><button class="btn btn-navy btn-fill-vert button">Intuit</button></a>
                    <button class="btn btn-orange btn-fill-vert button">Carrot</button>
                    <button class="btn btn-red btn-fill-vert button">Alizarin</button>
                </section>
            </div>
      </div>
</div>
<div id="second"></div>
<div id="third">
  <div id="contact">
   <p class="contact">
    Contact with me by <br>
    E-mail: gs455@mail.ru<br>
    Skype: white_cefiro<br>
    Phone: +79539204705<br>
    </p>
  </div>
</div>

<script>
    var linkNav = document.querySelectorAll('[href^="#nav"]'),
        V = 2;  // скорость, может иметь дробное значение через точку
    for (var i = 0; i < linkNav.length; i++) {
        linkNav[i].addEventListener('click', function(e) {
            e.preventDefault();
            var w = window.pageYOffset,  // прокрутка
                hash = this.href.replace(/[^#]*(.*)/, '$1');  // id элемента, к которому нужно перейти
            t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
                start = null;
            requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
            function step(time) {
                if (start === null) start = time;
                var progress = time - start,
                    r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
                window.scrollTo(0,r);
                if (r != w + t) {
                    requestAnimationFrame(step)
                } else {
                    location.hash = hash  // URL с хэшем
                }
            }
        }, false);
    }

</script>

</html>



<?php

?>
/**
 * Created by PhpStorm.
 * User: busygin
 * Date: 31.12.2015
 * Time: 10:37
 */