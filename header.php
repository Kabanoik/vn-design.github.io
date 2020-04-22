<?php require 'db.php'; ?>
<header class="site-header push">	
    <div class="LogoMobile"><a href="/">Smart-Design</a></div>
    <nav class="menu">
    	<div class="logoandAll">
        <div class="mainLogo"><a href="/">Smart-Design</a></div>
      
          <div class="dws-menu">
            <div class="phoneform">
              <span class="buttonn"><a href="#popup4" class="fill">Заказать звонок</a></span>
              <div class="viberPhone">
                <a href="viber://chat?number=0506459521">&emsp;<img src="img/iconViber.svg"></a>
              </div>
              <div class="phoneColor">
                <a href="tel:+38(050)645-95-21">+38 050 645 95 21</a>
                <a class="phoneSecond" href="tel:+38(096)740-17-10">+38 096 740 17 10</a>
              </div>
            </div>

            <ul class="dws-main">
              <li><a href="/" class="btn btn-2">Главная</a></li>
            	<li class="services"><a href="/#services" class="btn btn-2">Услуги</a></li> 
              <li><a href="projects.php" class="btn btn-2">Проекты</a></li>
  			      <li><a href="/#contacts" class="btn btn-2">Контакты</a></li>
    		    </ul>	
          
            
          </div><!-- dws-menu -->
      </div><!--- logoandAll --->
    </nav>
    
	</header>
  <!-- Site Overlay -->
        <div class="site-overlay"></div>
  
          <!-- Menu Button -->
            <button class="menu-btn">&#9776;</button>
  
        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                  <li class="pushy-link"><a href="/">Главная</a></li>
                  <li class="pushy-link"><a href="/#services">Услуги</a></li>
                  <li class="pushy-link"><a href="projects.php">Проекты</a></li>
                  <li class="pushy-link"><a href="/#contacts">Контакты</a></li>
                </ul>
            </div>
        </nav>
        
        <!-- popup4 -->
        <div id="popup4" class="overlay">
          <div class="popup2">
            <h2>Оставьте Ваш номер и мы Вам перезвоним!</h2>
              <a class="close" href="#">&times;</a>
              <div class="contentss2">

                  <div class="col-sm">
                    <form action="telegram.php" method="POST">

                      <div class="form-group4">
                        <input type="text" class="form-control" id="" name="user_name" placeholder="Ваше имя">
                      </div>
                    
                      <div class="form-group4">
                        <input type="number" class="form-control" id="" name="user_phone" placeholder="Ваш номер">
                      </div>
                    
                      <button type="submit" class="pulse">Отправить заявку</button>
                    </form>
                  </div><!-- .col-sm-4 -->
              </div><!-- contentss2 -->
          </div><!-- popup2 -->
        </div><!-- popup4 -->