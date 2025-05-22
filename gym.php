<!DOCTYPE html>
<html lang="tr">


<style>
    
    .grid-item img {
    width: 100%;
    height: 250px; 
    object-fit: cover; 
}

    .option a {
    display: inline-block;
    padding: 12px 24px;
    background: linear-gradient(135deg, rgba(255, 204, 0, 0.5), rgba(229, 168, 0, 0.5));
    color: #fff;
    text-decoration: none;
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 600;
    border-radius: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: all 0.3s ease-in-out;
    letter-spacing: 1px;
}

.option a:hover {
    background: linear-gradient(135deg, rgba(229, 168, 0, 0.5), rgba(255, 204, 0, 0.5));
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    color: #fff;
    text-decoration: underline;
}

.option a:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(255, 204, 0, 0.6); 
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap; 
    gap: 20px; 
    max-width: 90%; 
    margin: 0 auto; 
}
.option {
    flex: 1 1 300px; 
    max-width: 350px; 
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.option:hover {
    transform: translateY(-10px);
}

.option img {
    width: 80%;
    max-width: 150px;
    border-radius: 50%;
}


.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 90%; 
    margin: 0 auto; 
}


.option {
    flex: 1 1 calc(33.33% - 20px); 
    max-width: 350px; 
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}


.option:hover {
    transform: translateY(-10px);
}


@media (max-width: 768px) {
    .container {
        flex-direction: column; 
        align-items: center;
    }

    .option {
        flex: 1 1 100%; 
        max-width: 350px;
        margin-bottom: 20px; 
    }
    
}


.option h3 {
    font-size: 22px;
    font-weight: bold;
    color: white; 
}

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;600&display=swap');

.option p {
    font-size: 18px;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    color: #e0e0e0;
}

.option p:first-of-type {
    text-decoration: line-through;
    color: #b22222; 
    font-size: 18px;
    font-weight: bold;
}

.option p:last-of-type {
    font-size: 22px;
    font-weight: 700;
    font-family: "Playfair Display", serif;
    background: linear-gradient(135deg, #FFD700, #DAA520);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 1px 1px 2px rgba(255, 215, 0, 0.5);
}
.option:not(:last-child) {
    border-right: 2px solid #ccc; 
    padding-right: 20px;
    color: color: #efd3a3;
;
}

@media (max-width: 768px) {
    .option:not(:last-child) {
        border-right: none;
        border-bottom: 2px solid #ccc;
        padding-bottom: 20px;
        color: #efd3a3;
    }
}

    </style>


<style>
.custom-square-img {
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    border-radius: 10px;
	width: 200px;
}
</style>

	<?php include 'header.php'; ?>

		<!-- HERO IMAGE -->
		<div class="impx-slide-container style1 resto">
			<div class="impx-slideshow-fw">
				<div class="impx-hero-resto uk-position-relative  uk-background-fixed uk-background-center-center uk-height-1-1">
					<div class="impx-overlay dark"></div>
			    	<div class="uk-container">
			    		<div class="uk-grid uk-flex uk-flex-center uk-flex-middle">
			    			<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-1@m  uk-width-1-1@s uk-position-center uk-margin-large-top">
		    					<div class="impx-slide-fw-caption resto-caption uk-position-relative uk-position-z-index uk-text-center uk-light">
		    						<!-- intro -->
						    		<h1 class="impx-text-shadow">Mora Gym</h1>
						    		<p class="uk-margin-remove impx-text-shadow uk-text-lead">Üstelik Rezidansta Kalanlara %50 İndirimli!</p>
						    		
			    					<!-- intro end -->
					    		</div>
				    		</div>
			    		</div>
		    		</div>
				</div>
			</div>
		</div>
		<!-- HERO IMAGE END -->
		<center>
		<!-- FEATURES -->
        <div class="uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom bg-color-gray  pattern-1 impx-resto-badge">
            <div class="uk-container">
                <div class="uk-grid">
                    <!-- Image -->
                    <div class="uk-width-2-5@xl uk-width-2-5@l uk-width-2-5@m uk-width-1-1@s uk-vertical-align-bottom uk-position-relative uk-position-z-index impx-negative-top xxlarge">
                        <img src="gym/sohbetedengrup.jpg" alt="Chef Stand" class="img-resto-intro uk-align-center"/>
                    </div>
                    <!-- Image End -->
                    <!-- Contact Info -->
                    <div class="uk-width-3-5@xl uk-width-3-5@l uk-width-3-5@m uk-width-1-1@s impx-intro resto">
                        <h3>Çalışma Saatlerimiz</h3>
                        <p class="impx-text-large uk-margin-bottom">Mora Gym, sizlere en iyi spor deneyimini sunmak için modern ekipmanlar ve profesyonel antrenörler eşliğinde hizmet vermektedir. Sağlıklı bir yaşam için düzenli egzersizin önemini biliyor ve sizleri spor yapmaya davet ediyoruz.
						<br>
						📌 Hafta içi: 08:00 - 23:00
						<br>
						📌 Cumartesi: 08:00 - 23:00
						<br>
						📌 Pazar: Kapalı
						<br>

						Siz de Mora Gym'e katılarak formunuzu koruyabilir, enerjinizi artırabilir ve sağlıklı bir yaşam tarzına adım atabilirsiniz!

								</p>                        
                        
                    </div>
                    <!-- Contact Info End -->                    
                </div>
            </div>
        </div>
        <!-- FEATURES END -->
</scenter>

        <!-- HIGHLIGHT -->
        <div class="uk-padding uk-margin-bottom resto-feat uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>

    				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s uk-margin-top">
    					<div class="impx-intro resto margin-medium"><!-- intro -->
    						<h3>Hizmetlerimiz</h3>
    						<p class="uk-margin-medium-bottom impx-text-large">Sağlığınızı ön planda tutarak, modern spor salonumuzdan saunaya, jakuziden yüzme havuzumuza kadar çeşitli hizmetlerle hem bedeninizi hem de zihninizi dinlendiriyoruz. Her anınızda yanınızdayız.</p>
    					</div><!-- intro end -->

    					<!-- highlight items -->
<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
    <li class="resto-feat-item"><!-- highlight item #1 -->
        <div data-uk-grid>
            <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-position-relative">
                    <img src="gym/aletler.jpg" alt="resort" class="custom-square-img">
                </div>
            </div>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                
                <h5 class="uk-margin-remove-bottom ">Fitness</h5>
                <p class="uk-margin-small-top uk-margin-remove-bottom">Modern ekipmanlarla donatılmış spor salonumuzda formunuzu koruyun ve enerjinizi artırın.</p>
            </div>
        </div>
    </li><!-- highlight item #1 end -->

    <li class="resto-feat-item"><!-- highlight item #2 -->
        <div data-uk-grid>
            <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-position-relative">
                    <img src="gym/havuz.jpg" alt="resort" class="custom-square-img">
                </div>
            </div>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                <h5 class="uk-margin-remove-bottom ">Havuz</h5>
                <p class="uk-margin-small-top uk-margin-remove-bottom">Yüzme keyfiyle hem rahatlayın hem de vücudunuzu dinç tutun.</p>
            </div>
        </div>
    </li><!-- highlight item #2 end -->

    <li class="resto-feat-item"><!-- highlight item #3 -->
        <div data-uk-grid>
            <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-position-relative">
                    <img src="gym/jakuzi.jpg" alt="resort" class="custom-square-img">
                </div>
            </div>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                <h5 class="uk-margin-remove-bottom ">Jakuzi</h5>
                <p class="uk-margin-small-top uk-margin-remove-bottom">Sıcak suyun rahatlatıcı etkisiyle stresten arının ve yenilenin.</p>
            </div>
        </div>
    </li><!-- highlight item #3 end -->

    <li class="resto-feat-item"><!-- highlight item #4 -->
        <div data-uk-grid>
            <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-position-relative">
                    <img src="gym/stoksauna.jpg" alt="resort" class="custom-square-img">
                </div>
            </div>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                <h5 class="uk-margin-remove-bottom ">Sauna</h5>
                <p class="uk-margin-small-top uk-margin-remove-bottom">Toksinlerden arınarak vücudunuzu ve zihninizi dinlendirin.</p>
            </div>
        </div>
    </li><!-- highlight item #4 end -->


	<li class="resto-feat-item"><!-- highlight item #5 -->
        <div data-uk-grid>
            <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
                <div class="uk-position-relative">
                    <img src="gym/buhar.jpg" alt="resort" class="custom-square-img">
                </div>
            </div>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                <h5 class="uk-margin-remove-bottom ">Buhar Odası</h5>
                <p class="uk-margin-small-top uk-margin-remove-bottom">Sıcak buharın nemlendirici etkisiyle cildinizi canlandırın, kaslarınızı gevşetin ve rahatlayın.</p>
            </div>
        </div>
    </li><!-- highlight item #5 end -->



<li class="resto-feat-item" style="text-align: center;"><!-- highlight item -->
    <div data-uk-grid>
        <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
            <div class="uk-position-relative">
                <img src="gym/resepsiyon.jpg" alt="resort" class="custom-square-img">
            </div>
        </div>
        <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
            <h5 class="uk-margin-remove-bottom ">Daha Fazlası İçin</h5>
            <p class="uk-margin-small-top uk-margin-remove-bottom">
                <a href="https://www.moragym.com" target="_blank">www.moragym.com</a>
				
            </p>
        </div>
    </div>
</li>

</ul>
<!-- highlight items end -->


                    </div>

    				 <!-- Intro Text -->
                     <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-1@m impx-right-img">
    <div class="impx-img-stacked uk-padding-remove-horizontal">
        
            <video class="custom-square-video" controls poster="gym/kapakfoto.png">
                <source src="gym/a.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </a>
    </div>
</div>

                    <!-- Intro Text End -->

				</div>
			</div>
		</div>
		<!-- HIGHLIGHT -->

		<!-- MENU BOOK -->
		<div id="impx-menu-carousel" class="impx-menu-carousel uk-padding uk-position-relative uk-padding-remove-horizontal mobile-rmv-pad vert uk-background-fixed uk-background-center-center uk-height-1-1">
			
			<div class="uk-container uk-container-large">

				<!-- Intro -->
				
				<!-- Intro End -->

				<!-- Menu groups -->
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-1-1">

					<div class="container">
    <div class="option option-01">
        <img src="deney/3ay.png" style="text-align: center;width:40%; height:40%;border-radius:100%">
        <h3>3 AY</h3>
        <p>Normal Fiyat: 5600TL</p>
        <p>Moralılara Özel Fiyat: 2800TL</p>
        <a href="https://moragym.com/iletisim.php">Detaylı Bilgi İçin Tıklayınız</a>
    </div>
    <div class="option option-02">
        <img src="deney/6ay.png" style="text-align: center;width:40%; height:40%;border-radius:100%">
        <h3>6 AY</h3>
        <p>Normal Fiyat: 8600TL</p>
        <p>Moralılara Özel Fiyat: 4300TL</p>
        <a href="https://moragym.com/iletisim.php">Detaylı Bilgi İçin Tıklayınız</a>
    </div>
    <div class="option option-03">
        <img src="deney/12ay.png" style="text-align: center;width:40%; height:40%;border-radius:100%">
        <h3>12 AY</h3>
        <p>Normal Fiyat: 11600TL</p>
        <p>Moralılara Özel Fiyat: 5800TL</p>
        <a href="https://moragym.com/iletisim.php">Detaylı Bilgi İçin Tıklayınız</a>
    </div>
</div>

	</div>
	</div>
    		</div>
		</div>
		<!-- MENU BOOK -->
		
		<!-- GALLERY -->
		<div class="uk-padding uk-margin-medium-bottom uk-padding-remove-horizontal">
            <div class="uk-container">
               <div class="uk-flex-center" data-uk-grid>
                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-text-center uk-margin-small-bottom"><!-- gallery intro -->
                        <h2 class="uk-margin-remove-bottom">Spor Salonumuzdan Görüntüler</h2>
                        <p class="impx-text-large uk-margin-remove-bottom uk-margin-small-top impx-margin-bottom-small">Modern spor salonumuzdan keyifli anlar. Her bir detay, sağlığınız ve konforunuz için özenle tasarlandı.</p>
                    </div><!-- gallery intro end -->
                </div>

                <!-- gallery items -->
           		<div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-medium impx-margin-top-small" data-uk-grid="masonry : true" data-uk-lightbox>
                    <div class="grid-item uk-margin-bottom"><!-- gallery item #1 -->
                    	<a class="uk-inline-clip uk-transition-toggle" href="gym/aletler.jpg">
	                        <img src="gym/aletler.jpg" alt="">	                        
	                    </a>
                    </div><!-- gallery item #1  end -->
                    <div class="grid-item" ><!-- gallery item #2 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="gym/havuz.jpg">
	                        <img src="gym/havuz.jpg" alt="">	                       
	                    </a>
                    </div><!-- gallery item #2 end -->
                    <div class="grid-item"><!-- gallery item #3 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="gym/jakuzi.jpg" >
	                        <img src="gym/jakuzi.jpg" alt="">	                        
	                    </a>
                    </div><!-- gallery item #3 end -->
                    <div class="grid-item" ><!-- gallery item #4 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="gym/stoksauna.jpg">
	                        <img src="gym/stoksauna.jpg" alt="">
	                    </a>
                    </div><!-- gallery item #4 end -->
                    <div class="grid-item" ><!-- gallery item #5 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="gym/kosu.jpg"  >
	                        <img src="gym/kosu.jpg" alt="">
	                    </a>
                    </div><!-- gallery item #5 end -->
                    <div class="grid-item" ><!-- gallery item #6 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="gym/giyinme.jpg"  >
	                        <img src="gym/giyinme.jpg" alt="">	                        
	                    </a>
                    </div><!-- gallery item #7 end --> 
                    <div class="grid-item" ><!-- gallery item #7 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="resimler/moragym.webp"  >
	                        <img src="resimler/moragym.webp" alt="">	                        
	                    </a>
                    </div><!-- gallery item #8 end -->
                    <div class="grid-item" ><!-- gallery item #8 -->
                        <a class="uk-inline-clip uk-transition-toggle" href="disbina/5.jpg"  >
	                        <img src="disbina/5.jpg" alt="">	                        
	                    </a>
                    </div><!-- gallery item #6 end -->            
                </div>
                <!-- gallery items end -->
            </div>
        </div>
        <!-- GALLERY END -->

       

		
		<?php include 'footer.php'; ?>

    	<!-- Javascript -->
    	<script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/template-config.js"></script>
    </body>


</html>