<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projects</title>
	<link rel="stylesheet" href="css/projects.style.css">
 	<link rel="stylesheet" href="css/fonts.css">
 	<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="css/pushyMenu.css">
    <link rel="stylesheet" href="css/media.css">

</head>

<body>
   

<?php require_once 'header.php'; ?>
    <!-- <div class="wrapback"></div> -->
    	<div class="wrapper">

        <div id="container">

    <a name="PhotoGallery"></a>
	<div class="project"><h2>Фотогалерея наших проектов</h2></div>
    
   
<div class="gallery">
    <?php       
        $limit = 9;
        $firstblocks = get_firstblocks_all($limit);
        foreach ($firstblocks as $firstblock):        
         
    ?>
    <div class="gblock">
        <div class="descr">
              <a class="title" 
                  data-caption="<?php echo $firstblock["caption"]; ?>" 
                  data-fancybox="<?php echo $firstblock["fancybox"]; ?>" 
                  href="<?php echo $firstblock["hrefs"]; ?>">
                  <p><?php echo $firstblock["text"]; ?></p></a>
                    <img src="<?php echo $firstblock["hrefs"]; ?>">
        </div>
      
    </div><!-- gblock -->
 <?php endforeach; ?>

    <?php $gblocks = get_gblocks_all();
        foreach ($gblocks as $gblock): ?>
    <div class="imghiden">
        <a  
            data-caption="<?php echo $gblock["caption"]; ?>" 
            data-fancybox="<?php echo $gblock["fancybox"]; ?>" 
            href="<?php echo $gblock["PathIMG"]; ?>">
            <img src="<?php echo $gblock["PathIMG"]; ?>">  
        </a>
    </div><!-- imghiden -->
<?php endforeach; ?>
</div><!-- Gallery -->

<!-- <div class="pagmore">

    <form class="morepage" >

        <input id="more" type="submit" name="limit">

        <?php 
        $results = get_count_gblock();

        while($rows = $results->fetch()) {  
            foreach ($rows as $row ) {
                print $row;  
            }
        }
    ?>
    </form>
    
    
</div> -->

</div><!-- container -->
</div><!-- wrapper -->
        <footer class="site-footer push">
            
		      <div class="contactinfo">
                <div class="fotercont">
                    <p>Адрес: Украина, г. Запорожье</p>
                    <a href="mailto:smart-design@gmail.com">smart-design@gmail.com</a>
                </div>
                <div class="contnumber">
    		        <p>Контакты</p>
    		        <a href="tel:+38(050)645-95-21">+38 050 645-95-21</a>
    		        <a href="tel:+38(096)740-17-10">+38 096 740-17-10</a>
                </div>
		      </div>
		        <div class="footerRights">Все права защищены &copy;2013-2020</div>
		</footer>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/navmenu.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/pushy.min.js"></script>


		
</body>
</html>