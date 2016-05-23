
<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' type='text/css' href='design.css'/>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery.js" ></script>

</head>
<div id = "top" class="myElement">
    <p class="contact" style="margin-left: 80px; margin-top: 5px">Busygin Alexey</p>
    <div id="top_button_about_me" class="button_top"><a href="#about_me"><span></span>About me</a></div>
    <div id="top_button_my_works" class="button_top"><a href="#my_works"><span></span>My works</a></div>
    <div id="top_button_my_contacts" class="button_top"><a href="#my_contacts"><span></span>My contacts</a></div>
</div>

<div id="first" class="fon">
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
    <div class="i_am">
        <div class="foto">
            <img src="pic/I_am.jpg" alt="Моё фото" style="float: right">
        </div>
        I am beginner web programmer. Live in Tomsk.  I study HTML, CSS, JavaScript (jQuery), PHP, MySQL more than 1 year. Currently i develop internet-store based on Joomla. I  looking for nonprofit projects or projects without salary for improving my skills.
    </div>

</div>

<div id="second" class="fon">
    <div id="wraper_project">
        <div class ="main-container" >
            <div class="tiles">
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Учебный курс</span><span class="info">Повышение осведомлённости сотрудников компании в области информационной безопасности</span></div></a>
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Lorem Ipsum Dolor</span><span class="info">Quisque vel felis lectus donec vitae dapibus magna</span></div></a>
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Lorem Ipsum Dolor</span><span class="info">Quisque vel felis lectus donec vitae dapibus magna</span></div></a>
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Lorem Ipsum Dolor</span><span class="info">Quisque vel felis lectus donec vitae dapibus magna</span></div></a>
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Lorem Ipsum Dolor</span><span class="info">Quisque vel felis lectus donec vitae dapibus magna</span></div></a>
                <a href="#" class="tile"><img id="project1"  src="pic/Project1.jpg" width="425" height="300"><div class="details"><span class="title">Lorem Ipsum Dolor</span><span class="info">Quisque vel felis lectus donec vitae dapibus magna</span></div></a>
            </div>
        </div>
    </div>
</div>

<div id="third" class="fon">
  <div id="contact">
   <p class="contact">
    Contact with me by <br>
    E-mail: gs455@mail.ru<br>
    Skype: white_cefiro<br>
    Phone: +79539204705<br>
    </p>
  </div>

</div>

<p id="back-top">
    <a href="#top"><span></span>Вверх</a>
</p>

</html>
<script>
    $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            $('#top_button_about_me a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            $('#top_button_my_works a').click(function () {
                $('body,html').animate({
                    scrollTop: 990
                }, 800);
                return false;
            });
            $('#top_button_my_contacts a').click(function () {
                $('body,html').animate({
                    scrollTop: 2048
                }, 800);
                return false;
            });
        });

    });
</script>


<?php

?>
