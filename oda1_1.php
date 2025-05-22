<!DOCTYPE html>
<html lang="tr">
<style>
.text-left-md {
    text-align: left;
}

@media (max-width: 768px) {
    .text-left-md {
        text-align: center;
    }
}
</style>

<style>
    
.floor-icon {
    width: 5rem;
    height: 3rem;
    line-height: 3rem;
    background-color: #31a9a9;
    color: white;
    border-radius: 1.5rem;
    font-size: 1.1rem;
    margin: 0 auto 0.5rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s ease;
}

.floor-icon:hover {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .floor-icon {
        width: 3.5rem;
        height: 2rem;
        font-size: 0.9rem;
        border-radius: 1rem;
    }
}

@media (min-width: 1200px) {
    .floor-icon {
        width: 6rem;
        height: 3.5rem;
        font-size: 1.3rem;
        border-radius: 1.75rem;
    }
}
</style>



    <style>
        
        .impx-overlay {

 	background-color: rgba(144, 133, 133, 0.3) !important;
}
.thumb-wrapper {
    position: absolute;
    left: 0;
    top: 0;
    width: 10%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    border-right: 2px solid #000000; 
    border-left: 2px solid #000000; 
    padding: 10px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
    z-index: 2;
}

.uk-slideshow-items {
    margin-left: 10%; 
}

.uk-thumbnav-vertical li {
    margin-bottom: 10px; 
}

.uk-thumbnav-vertical li img {
    width: 100px; 
    height: 100px; 
    object-fit: cover; 
    border-radius: 10px;
    display: block;
}



</style>
<?php include 'header.php'; ?>

		<!-- PAGE HEADING -->
		<div class="impx-page-heading uk-position-relative room-detail">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">1 + 1 Daire Özellikleri</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">Modern Yaşam Alanı</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->


		<!-- CONTENT -->
		<div class="uk-padding vert uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>
	
					<div class="uk-width-1-1 uk-margin-medium-top">
						<!-- slider -->
						<div class="impx-room-slider">
							<div class="uk-position-relative" data-uk-slideshow="animation: fade">
							    <ul class="uk-slideshow-items">
							        <li>
							            <img src="odalar/1_1/ara1.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
                                    <img src="odalar/1_1/oda1.jpg" alt="" data-uk-cover>
                                    <div class="impx-overlay"></div>
							        </li>
							        <li>
                                    <img src="odalar/1_1/oda5.jpg" alt="" data-uk-cover>
                                    <div class="impx-overlay"></div>
							        </li>
							        <li>
                                    <img src="odalar/1_1/salon1.jpg" alt="" data-uk-cover>
                                    <div class="impx-overlay"></div>
							        </li>
							        <li>
                                    <img src="odaMain/11.png" alt="" data-uk-cover>
                                    
							        </li>
							    </ul>
							    <!-- slider thumb nav -->
							    <!-- slider thumb nav -->
                                                    <div class="thumb-wrapper">
                                                        <ul class="uk-thumbnav uk-thumbnav-vertical">
                                                            <li data-uk-slideshow-item="0"><a href="#"><img src="odalar/1_1/ara1.jpg" width="120" alt=""></a></li>
                                                            <li data-uk-slideshow-item="1"><a href="#"><img src="odalar/1_1/oda1.jpg" width="120" alt=""></a></li>
                                                            <li data-uk-slideshow-item="2"><a href="#"><img src="odalar/1_1/oda5.jpg" width="120" alt=""></a></li>
                                                            <li data-uk-slideshow-item="3"><a href="#"><img src="odalar/1_1/salon1.jpg" width="120" alt=""></a></li>
                                                            <li data-uk-slideshow-item="4"><a href="#"><img src="odamain/1_1.png" width="120" alt=""></a></li>
                                                        </ul>
                                                    </div>
<!-- slider thumb nav end -->

							    <!-- slider thumb nav end -->
							</div>
						</div>
						<!-- slider end -->
					</div>

<!-- ANA İÇERİK -->
<div class="uk-width-3-3@xl uk-width-3-3@l uk-width-3-3@m uk-width-1-1@s">
        <!-- Highlight -->
        <ul class="uk-child-width-1-5@xl uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-medium uk-grid-match" data-uk-grid>
        <!-- Akıllı TV -->
        <li class="uk-text-center">
            <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
                <i class="fa fa-tv fa-2x impx-text-aqua"></i> <!-- Akıllı TV için TV ikonu -->
                <h6 class="uk-margin-remove-bottom uk-margin-small-top">Akıllı TV</h6>
                <p class="uk-margin-remove-bottom uk-margin-small-top">43" Salon & 32" Yatak Odası TV</p>
            </div>
        </li>
        <!-- Ankastre -->
        <li class="uk-text-center">
            <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
                <i class="fa fa-fire fa-2x impx-text-aqua"></i> <!-- Ankastre için ocak (fire) ikonu -->
                <h6 class="uk-margin-remove-bottom uk-margin-small-top">Ankastre</h6>
                <p class="uk-margin-remove-bottom uk-margin-small-top">4'lü Ocak, Fırın & Aspiratör</p>
            </div>
        </li>
        <!-- Tam Donanım -->
        <li class="uk-text-center">
            <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
                <i class="fa fa-cogs fa-2x impx-text-aqua"></i> <!-- Tam donanım için makine (cogs) ikonu -->
                <h6 class="uk-margin-remove-bottom uk-margin-small-top">Tam Donanım</h6>
                <p class="uk-margin-remove-bottom uk-margin-small-top">Bulaşık & Çamaşır Makinesi</p>
            </div>
        </li>
        <!-- Isıtma -->
        <li class="uk-text-center">
            <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
                <i class="fa fa-thermometer fa-2x impx-text-aqua"></i> <!-- Isıtma için termometre (thermometer) ikonu -->
                <h6 class="uk-margin-remove-bottom uk-margin-small-top">Isıtma</h6>
                <p class="uk-margin-remove-bottom uk-margin-small-top">Yerden Isıtma & Pay Ölçer</p>
            </div>
        </li>
        <!-- Ücretsiz Temizlik -->
        <li class="uk-text-center">
            <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <i class="	fa fa-signing fa-2x impx-text-aqua"></i> <!-- Ücretsiz temizlik için çöp (trash) ikonu -->
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Ücretsiz Temizlik</h6>
                <p class="uk-margin-remove-bottom uk-margin-small-top">Ayda 1 Kereye Mahsus Temizlik</p>
            </div>
        </li>
    </ul>
    <!-- Highlight End -->
    <!-- KAT BİLGİLERİ (HIGHLIGHTS) -->
<ul class="uk-child-width-1-5@xl uk-child-width-1-5@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-medium uk-grid-match" data-uk-grid>
    <!-- 1. Kat -->
    <li class="uk-text-center"><a href="katplani.php">
        <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <div class="floor-icon">1. Kat</div>
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Toplam: 54 daire</h6>
            <div class="text-left-md">          
                  <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralık: 5<br>
            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Eylülden Sonra: 5
        </div>
        </div></a>
    </li>
    <!-- 2. Kat -->
    <li class="uk-text-center"><a href="katplani.php">
        <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <div class="floor-icon">2. Kat</div>
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Toplam: 54 daire</h6>
            <div class="text-left-md">
                            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralık: 5<br>
            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Eylülden Sonra: 5
        </div>
        </div></a>
    </li>
    <!-- 3. Kat -->
    <li class="uk-text-center"><a href="katplani.php">
        <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <div class="floor-icon">3. Kat</div>
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Toplam: 54 daire</h6>
            <div class="text-left-md">
                            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralık: 5<br>
            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Eylülden Sonra: 5
        </div>
        </div></a>
    </li>
    <!-- 4. Kat -->
    <li class="uk-text-center"><a href="katplani.php">
        <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <div class="floor-icon">4. Kat</div>
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Toplam: 54 daire</h6>
            <div class="text-left-md">
                            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralık: 5<br>
            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Eylülden Sonra: 5
        </div>
        </div></a>
    </li>
    <!-- 5. Kat -->
    <li class="uk-text-center"><a href="katplani.php">
        <div class="uk-card uk-card-default uk-card-body impx-padding-medium">
            <div class="floor-icon">5. Kat</div>
            <h6 class="uk-margin-remove-bottom uk-margin-small-top">Toplam: 54 daire</h6>
            <div class="text-left-md">
                            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralık: 5<br>
            <span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Eylülden Sonra: 5
        </div>
        </div></a>
    </li>
</ul>

</div>


				<!-- Oda Açıklaması -->
<h4>Daire Açıklaması</h4>
<p class="impx-text-large">
    MORA REZİDANS’ta modern ve şık bir yaşam sunan 1+1 kiralık dairemiz, konforlu ve kullanışlı yapısıyla sizleri bekliyor. Dairemiz, şık tasarımı ve eksiksiz donanımı ile rahat bir yaşam alanı sunmaktadır.
</p>

<p class="uk-margin-medium-bottom">
    29.08 m² büyüklüğündeki dairelerimizde yerden ısıtma sistemi bulunmaktadır ve pay ölçer ile çalışmaktadır. Ayrıca, her dairede ayda bir kez ücretsiz temizlik hizmeti verilmektedir.Açık abonelikler sayesinde, dairenize taşındığınız an oturuma başlayabilirsiniz.
</p>

<!-- Oda Özellikleri -->
<div data-uk-grid>
    <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
        <h5>Daire İçerisinde;</h5>
        <ul class="uk-list uk-list-bullet impx-list">
            <li>43" LCD Salon TV & 32" LCD Oda TV</li>
            <li>Bulaşık Makinesi & Mikrodalga</li>
            <li>Ankastre Set (4’lü Ocak, Fırın, Aspiratör)</li>
            <li>Büyük Buzdolabı</li>
            <li>L Koltuk, Yemek Masası ve Sandalyeler</li>
            <li>Çamaşır Makinesi, Çalışma Masası ve Sandalyesi</li>
            <li>Büyük Gardırop, Baza ve Yatak</li>
        </ul>
    </div>
    <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
        <h5>Mora Rezidans Ayrıcalıkları</h5>
        <ul class="uk-list uk-list-bullet impx-list">
            <li>Her ay ücretsiz temizlik hizmeti</li>

            <li>7/24 lobi ve güvenlik hizmeti</li>
            <li>Şeffaf ödeme takibi (Apsiyon Sistemi)</li>
            <li>Çalışma salonları ve toplantı odası</li>
            <li>Su yumuşatma ve kesintisiz su sistemi</li>
            <li>Starbucks, Burger King ve daha fazlasına kolay erişim</li>
        </ul>
    </div>
</div>


						<hr class="uk-divider-icon">

						
						</div>


					</div>
					<!-- MAIN CONTENT -->
          <!-- GALLERY -->
<div class="uk-padding uk-margin-medium-bottom uk-padding-remove-horizontal">
    <div class="uk-container">
        <!-- gallery items -->
        <div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-medium impx-margin-top-small" data-uk-grid="masonry : true" data-uk-lightbox>
            <div class="grid-item uk-margin-bottom">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ARA1.JPG">
                    <img src="odalar/1_1/ARA1.JPG" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ara2.jpg">
                    <img src="odalar/1_1/ara2.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/BANYO1.jpg">
                    <img src="odalar/1_1/BANYO1.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/banyo2.jpeg">
                    <img src="odalar/1_1/banyo2.jpeg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ODA1.jpg">
                    <img src="odalar/1_1/ODA1.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ODA2.jpg">
                    <img src="odalar/1_1/ODA2.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ODA3.jpg">
                    <img src="odalar/1_1/ODA3.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ODA4.jpg">
                    <img src="odalar/1_1/ODA4.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/ODA5.jpg">
                    <img src="odalar/1_1/ODA5.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/SALON1.jpg">
                    <img src="odalar/1_1/SALON1.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/SALON2.jpg">
                    <img src="odalar/1_1/SALON2.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/SALON3.jpg">
                    <img src="odalar/1_1/SALON3.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/SALON4.jpg">
                    <img src="odalar/1_1/SALON4.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/SALON5.jpg">
                    <img src="odalar/1_1/SALON5.jpg" alt="">
                </a>
            </div>
            <div class="grid-item">
                <a class="uk-inline-clip uk-transition-toggle" href="odalar/1_1/salon6.jpg">
                    <img src="odalar/1_1/salon6.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- gallery items end -->
    </div>
</div>
<!-- GALLERY END -->


					

						

					</div>

				</div>
			</div>
		</div>	
	</div>					
		<!-- CONTENT END -->

        <?php include 'footer.php'; ?>

    	<!-- Javascript -->
    	<script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/tiny-date-picker.min.js"></script>
        <script src="js/date-config.js"></script>
        <script src="js/jquery.barrating.js"></script>
        <script src="js/rating-config.js"></script>
        <script src="js/template-config.js"></script>
    </body>


</html>