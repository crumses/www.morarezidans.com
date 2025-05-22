<!DOCTYPE html>
<html lang="tr">

<style>
@media (max-width: 768px) {
	.bg-img1 {
		background-image: none !important;
		background-color: #ffffff !important;
	}
}

.text-responsive {
  color: white;
}

/* Mobil cihazlar için (örnek: 768px altı) */
@media (max-width: 767px) {
  .text-responsive {
    color: black !important;
  }
}


	@media (max-width: 768px) {

.uk-container-expand {
   margin-bottom:-120px;   
}
			
}

    @media (max-width: 768px) {
        .impx-content.style3.hp2 {
            display: none;
        }
    }
	
    @media (max-width: 768px) {
        .impx-intro.uk-text-left {
            text-align: center !important; 
            margin-left: auto !important; 
            margin-right: auto !important; 
        }
    }
	@media (max-width: 768px) {
    
    .impx-slide-fw-caption {
        text-align: center !important;
        width: 100% !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
    }

    
    .impx-slide-fw-caption h1,
    .impx-slide-fw-caption p {
        text-align: center !important;
        margin-left: auto !important;
        margin-right: auto !important;
		
    }

    
    .uk-position-left,
    .uk-position-right {
        position: relative !important;
        left: auto !important;
        right: auto !important;
        transform: none !important;
		margin-top:100px;
    }

    
    .uk-container.uk-position-relative {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }
}
@media (max-width: 768px) {
   
    .uk-child-width-1-2@s {
        width: 100% !important;
    }

    
    .uk-card-media-left,
    .uk-card-media-right {
        width: 100% !important;
        height: auto !important;
    }

    
    .uk-card-media-left img,
    .uk-card-media-right img {
        width: 100% !important;
        height: auto !important;
    }

    
    .uk-card-body {
        width: 100% !important;
        padding: 20px !important;
    }

    
    .uk-grid-collapse {
        display: flex !important;
        flex-direction: column !important;
    }

   
    .uk-card-media-left {
        order: 1 !important;
    }

    .uk-card-body {
        order: 2 !important;
    }
}

	


</style>
    			
	<?php include 'header.php'; ?>

		<!-- SLIDESHOW -->
		<div class="uk-container-expand ">
			<div class="impx-slide-container style1 hp2 ">
				<div class="impx-slideshow-fw">

					<div data-uk-slideshow="autoplay: true; autoplay-interval: 6000; animation: fade; finite: false ;min-height: 319; max-height: 980;">
						<div class="uk-position-relative uk-visible-toggle uk-light">

						    <ul class="uk-slideshow-items">
						    	<!-- Slideshow Item #1 -->
						    	<li>
						    		<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-center dikdortgenimsi">
								    	<img src="disBina/6.jpg" alt="" data-uk-cover>
								    	<div class="uk-overlay-primary uk-position-cover impx-overlay dark"></div>
									</div>
									<div class="uk-container uk-position-relative uk-height-1-1">
										<div class="uk-position-left uk-flex uk-flex-middle">
											<div class="impx-slide-fw-caption">
												<div class="impx-slide-fw-caption-outline uk-transition-slide-left"></div>
									    		<h1 class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-left">MORA REZİDANS</h1>
									    		<p class="uk-text-large impx-text-aqua uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-right uk-text-uppercase">Bir Yaşam Tarzı...</p>
								    		</div>
								    	</div>
							    	</div>
						    	</li>
						    	<!-- Slideshow Item #1 End -->

						    	<!-- Slideshow Item #2 -->
						    	<li>
						    		<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-right">
								    	<img src="resimler/odalararkaplan.jpg	" alt="" data-uk-cover>
								    	<div class="uk-overlay-primary uk-position-cover impx-overlay dark"></div>
								    </div>
								    <div class="uk-container uk-position-relative uk-height-1-1">
										<div class="uk-position-right uk-flex uk-flex-middle">
											<div class="impx-slide-fw-caption right">
												<div class="impx-slide-fw-caption-outline right bottom uk-transition-slide-left"></div>
									    		<h1 class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right">Huzur & Konfor</h1>
									    		<p class="uk-text-large impx-text-aqua uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-right uk-text-uppercase">Sadece Morada...</p>
								    		</div>
								    	</div>
							    	</div>
						    	</li>
						    	<!-- Slideshow Item #2 End -->
								 	<!-- Slideshow Item #2 -->
									 <li>
						    		<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-right">
								    	<img src="disbina/3.webp" alt="" data-uk-cover>
								    	<div class="uk-overlay-primary uk-position-cover impx-overlay dark"></div>
								    </div>
								    <div class="uk-container uk-position-relative uk-height-1-1">
										<div class="uk-position-right uk-flex uk-flex-middle">
											<div class="impx-slide-fw-caption right">
												<div class="impx-slide-fw-caption-outline right bottom uk-transition-slide-left"></div>
									    		<h1 class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right">7/24 Hizmet</h1>
									    		<p class="uk-text-large impx-text-aqua uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-right uk-text-uppercase">Bir Telefon Uzağınızdayız...</p>
								    		</div>
								    	</div>
							    	</div>
						    	</li>
						    	<!-- Slideshow Item #2 End -->

						    						    							    	
						    </ul>

						    <!-- Slideshow Nav -->
						    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
		        			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
		        			<!-- Slideshow Nav End -->
		        		</div>
				    </div>

			    </div>
			</div>
		</div>
		<!-- SLIDESHOW END -->

		<!-- SERVICES -->
<div class="impx-content style3 hp2 bg-color-aqua uk-padding uk-padding-remove-horizontal pattern-1 yukaricek100px">
    <div class="uk-container uk-container-expand">

        <div data-uk-grid class="uk-position-relative uk-position-z-index">

            <div class="uk-width-expand">
                <ul class="uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-3@m uk-child-width-1-2@s data-uk-grid fac-list" data-uk-grid>
                    <li class="uk-text-center"><!-- Service item #1 --> 
                        <i class="fa fa-shield fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">7/24 Resepsiyon</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Konforunuz önceliğimiz.</p>
                    </li>
                    <li class="uk-text-center"><!-- Service item #2 --> 
                        <i class="fa fa-coffee fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">Cafe ve Restaurant</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Farklı markalardan onlarca lezzet bir arada.</p>
                    </li>
                    <li class="uk-text-center"><!-- Service item #3 --> 
                        <i class="fa fa-heartbeat fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">Fitness & Yüzme</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Sağlıklı bir yaşam için spor ve yüzme keyfi.</p>
                    </li>
                    <li class="uk-text-center"><!-- Service item #4 --> 
                        <i class="fa fa-leaf fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">Buhar Odası & Sauna</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Rahatlamak ve yenilenmek için.</p>
                    </li>
                    <li class="uk-text-center"><!-- Service item #5 --> 
                        <i class="fa fa-users fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">Sosyal Alanlar</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Eğlenceli ve dinlendirici sosyal ortamlar.</p>
                    </li>
                    <li class="uk-text-center"><!-- Service item #6 --> 
                        <i class="fa fa-map-marker fa-2x impx-text-white"></i>
                        <h6 class="uk-margin-remove-bottom uk-margin-small-top impx-text-white">Merkezi Konum</h6>
                        <p class="uk-margin-remove-bottom uk-margin-small-top impx-text-light">Üniversite ve şehir merkezine kolay ulaşım imkanı.</p>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>
<!-- SERVICES END -->


<!-- NEDEN BİZİ SEÇMELİSİNİZ? -->
<div class="uk-padding uk-padding-remove-horizontal uk-position-relative uk-position-relative bg-img1 ">
    <div class="uk-container">

        <div class="uk-flex-left" data-uk-grid>
            <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m">
                <div class="impx-intro uk-text-left"><!-- Başlık -->
				<h2 class="uk-margin-remove-bottom text-responsive">Hizmetlerimiz</h2>
<p class="uk-margin-remove-top uk-text-uppercase uk-text-muted impx-text-large text-responsive">Konfor, güvenlik ve ayrıcalıklı hizmet.</p>
<p class="impx-text-large uk-margin-remove impx-text-aqua text-responsive">Modern yaşamın tüm olanaklarını ile konforlu bir yaşam alanı sunuyoruz.</p>

                </div><!-- Başlık Son -->
            </div>
        </div>

        <div class="uk-width-3-4@xl uk-width-3-4@l uk-width-1-1@m uk-width-1-1@s uk-position-relative uk-margin-bottom" data-uk-grid>
            <!-- Neden Mora Rezidans? -->
            <ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s impx-features-hl uk-grid-medium uk-grid-match" data-uk-grid>
                <li><!-- Özellik #1 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color1 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">7/24 Resepsiyon</h6>
                        <p class="uk-margin-remove impx-text-lighter">Güvenliğin ön planda olduğu bir yaşam alanı.</p>
                        <span data-uk-icon="icon: lock; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
                <li><!-- Özellik #2 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color2 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Sosyal Alanlar</h6>
                        <p class="uk-margin-remove impx-text-lighter">Cafe, dinlenme alanları ve spor salonu ile kaliteli vakit geçirin.</p>
                        <span data-uk-icon="icon: users; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
                <li><!-- Özellik #3 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color3 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Mora GYM</h6>
                        <p class="uk-margin-remove impx-text-lighter">Kapalı yüzme havuzu, sauna ve buhar odası ile rahatlayın.</p>
                        <span data-uk-icon="icon: heart; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
                <li><!-- Özellik #4 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color4 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Modern ve Konforlu Daireler</h6>
                        <p class="uk-margin-remove impx-text-lighter">Geniş, ferah ve modern tasarımlı daireler ile üst düzey yaşam deneyimi.</p>
                        <span data-uk-icon="icon: home; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
                <li><!-- Özellik #5 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color5 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Merkezi Konum</h6>
                        <p class="uk-margin-remove impx-text-lighter">Şehrin en prestijli noktalarından birinde, her yere kolay ulaşım.</p>
                        <span data-uk-icon="icon: location; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
                <li><!-- Özellik #6 -->
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color6 impx-feature-item uk-position-relative">
                        <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Premium Yaşam</h6>
                        <p class="uk-margin-remove impx-text-lighter">Mora Rezidans'ta her gününüz ayrıcalıklı ve keyifli geçsin.</p>
                        <span data-uk-icon="icon: happy; ratio: 8" class="feature-icon"></span>
                    </div>
                </li>
            </ul>
            <!-- Özellikler Son -->
        </div>

    </div>
</div>
<!-- NEDEN BİZİ SEÇMELİSİNİZ? SON -->


		<!-- ROOMS LIST -->
		<div class="uk-padding uk-padding-remove-horizontal uk-position-relative impx-section-rooms style2 bg2 uk-position-relative no-margin uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay darker"></div>

			<div class="uk-container">
				<div class="uk-margin-bottom uk-flex uk-flex-center uk-position-relative uk-position-z-index" data-uk-grid>
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@xl">
						<div class="impx-intro uk-text-center"><!-- intro -->
							<h2 class="uk-margin-remove-bottom impx-text-white">Oda Çeşitlerimiz</h2>
							<p class="impx-text-large impx-text-lighter uk-margin-small-top uk-margin-bottom">Kendinize Göre En İyi Seçeneği Keşfedin. </p>
						</div><!-- intro end -->
					</div>
				</div>
			</div>

			<div class="uk-container">
		    	<div class="uk-position-relative uk-visible-toggle  uk-margin-medium-bottom">
					<!-- room items -->
			        <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-collapse uk-box-shadow-large uk-grid-match"  data-uk-grid>
			            <li><!-- room items #1--> <a href="oda1_1.php">
			            	<div class="impx-room-item medium">
			            		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
			            			<div class="uk-card-media-left uk-cover-container uk-position-relative">
			            				<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda1.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">1 + 1</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Modern Yaşam Alanı</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
							            <ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Alan: 27 - 31 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Modern ve kompakt tasarım</li>
                                    </ul>

										 <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										 <span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
										 
									    </div>
							        </div>
								</div>
							</div></a>
						</li><!-- room items #1 end -->
						<li><!-- room items #2 --><a href="oda2_0.php">
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
								    <div class="uk-card-media-left uk-cover-container uk-position-relative">
								    	<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda2.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative  impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">2 + 0</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Konforlu ve Pratik</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
							            <ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Alan: 28 - 34 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Geniş salon ve mutfak alanı</li>
                                    </ul>

										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										<span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
									    </div>
							        </div>
								</div>
							</div></a>
						</li><!-- room items #2 end -->
						<li><!-- room items #3 --><a href="oda2_1.php">
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
								    <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">2 + 1</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Aile Dostu ve Geniş</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
										<ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Alan: 40 - 42 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Büyük ve ferah oturma alanı</li>
                                    </ul>

										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										<span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
									    </div>
							        </div>
							        <div class="uk-card-media-right uk-cover-container uk-position-relative">
							        	<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda3.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
								</div>
							</div></a>
						</li><!-- room items #3 end -->
						<li><!-- room items #4 --><a href="oda2_1_d.php">
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
									<div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">2 + 1 Dubleks</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Ferah ve İşlevsel</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
							            <ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Alan: 40 - 58 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Geniş Yaşam Alanı</li>
                                    </ul>

										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										<span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
									    </div>
							        </div>
								    <div class="uk-card-media-right uk-cover-container uk-position-relative">
								    	<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda4.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
								</div>
							</div></a>
						</li><!-- room items #4 end-->
						<li><!-- room items #5--><a href="oda3_1_d.php">
			            	<div class="impx-room-item medium">
			            		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
			            			<div class="uk-card-media-left uk-cover-container uk-position-relative">
			            				<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda5.webp" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">3 + 1 Dubleks</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Geniş ve Lüks</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
							            <ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Alan: 52 - 81 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Geniş Yaşam Alanı</li>
                                    </ul>

										 <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										 <span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
									    </div>
							        </div>
								</div>
							</div></a>
						</li><!-- room items #5 end -->
						<li><!-- room items #6--><a href="oda4_1_d.php">
			            	<div class="impx-room-item medium">
			            		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
			            			<div class="uk-card-media-left uk-cover-container uk-position-relative">
			            				<canvas width="290" height="180"></canvas>
								        <img src="resimler/oda6.png" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">4 + 1 Dubleks</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Şık ve Prestijli</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">19999 TL'den Başlayan Fiyatlarla...</span>
										<ul class="uk-list room-fac">
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Oda Sayısı: 1500</li>
                                    <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>Kiralanabilir Oda Sayısı: 1500</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>  Alan: 78 - 79 m²</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Amerikan Mutfak</li>
                                        <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Modern Yaşam Alanı</li>
                                    </ul>
										 <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
										 <span class="uk-button uk-button-text impx-text-aqua">İncele &raquo;</span>
									    </div>
							        </div>
								</div>
							</div></a>
						</li><!-- room items #6 end -->
			        </ul><!-- room items end -->
		        </div>				
			</div>
		</div>
		<!-- ROOMS LIST END -->			
						
		
		
		<?php include 'footer.php'; ?>

    	<!-- Javascript -->
    	<script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/tiny-date-picker.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/date-config.js"></script>
        <script src="js/template-config.js"></script>
    </body>
</html>