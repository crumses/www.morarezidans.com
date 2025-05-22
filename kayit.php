<!DOCTYPE html>
<html lang="tr">
    
<style>


.uk-form-icon.select-icon {

    
    transform: translateX(-70%) !important; 
    
}
.uk-form-icon {
    margin-right: 8px; /* ikon metin arsı boşluk  */
}

.uk-form-controls select,
.uk-form-controls input {
    padding-left: 40px !important; /* yazı ikon mesafe şeklisi */
}

.uk-form-icon.select-icon {
    left: 10px; /* İkonun konumu */
    transform: translateY(50%); /* hizalama */
}




    </style>
<?php include 'header.php'; ?>

<!-- PAGE HEADING -->
<div class="impx-page-heading uk-position-relative kayit">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">Ön Kayıt</h1>
							<p class="impx-text-large uk-margin-remove"> Mora'ya Katılın</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->
<div class="uk-container uk-container-small uk-margin-medium-top uk-margin-medium-bottom">
<!-- kayit formu -->
<div class="bg-color-aqua uk-padding impx-padding-medium uk-box-shadow-medium" style="max-width: 500px; margin: 0 auto; border-radius: 10px;">
    <div class="impx-hp-booking-form">
        <h6 class="uk-heading-line uk-text-center uk-light uk-text-uppercase"><span>Ön Kayıt</span></h6>
        <form class="uk-form-stacked">
            <div class="uk-margin-small">
                <div class="uk-form-controls uk-position-relative">
                    <label class="uk-form-label" for="form-guest-select">Başvuru Türü:</label>
                    <span class="uk-form-icon select-icon"><i class="fa fa-file-text"></i></span>
                    <select class="uk-select uk-border-rounded" id="form-guest-select">
                        <option value="" disabled selected>Bireysel Başvuru</option>
                       
                    </select>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-isim">Adınız:</label>
                        <span class="uk-form-icon"><i class="fa fa-user"></i></span>
                        <input class="uk-input booking-email uk-border-rounded" id="form-isim" type="text" placeholder="Adınız...">
                    </div>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-soyad">Soyadınız:</label>
                        <span class="uk-form-icon"><i class="fa fa-user"></i></span> 
                        <input class="uk-input booking-email uk-border-rounded" id="form-soyad" type="text" placeholder="Soyadınız...">
                    </div>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-soyad">Telefon:</label>
                        <span class="uk-form-icon"><i class="fa fa-phone"></i></span> 
                        <input class="uk-input booking-email uk-border-rounded" id="form-telefon" type="text" placeholder="Telefon Numaranız...">
                    </div>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-mail">Mail:</label>
                        <span class="uk-form-icon"><i class="fa fa-envelope"></i></span> 
                        <input class="uk-input booking-email uk-border-rounded" id="form-mail" type="text" placeholder="Mailiniz...">
                    </div>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls uk-position-relative">
                    <label class="uk-form-label" for="form-meslek">Meslek:</label>

                    
                    <div class="uk-position-relative">
                    <i class="fa fa-briefcase uk-position-absolute" style="top: 50%; left: 10px; transform: translateY(-50%); color: white;"></i>

                        <select class="uk-select uk-border-rounded" id="form-meslek" style="padding-left: 30px;">
                            <option value="" disabled selected>Mesleğiniz...</option>
                            <option value="1">Öğrenci</option>
                            <option value="2">Kamu</option>
                            <option value="3">Kolluk Kuvvetleri</option>
                            <option value="4">Diğer...</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="uk-margin-small">
                <div class="uk-form-controls uk-position-relative">
                    <label class="uk-form-label" for="form-daire">Daire Tipi:</label>
                    <span class="uk-form-icon select-icon"><i class="fa fa-home" ></i></span> 
                    <select class="uk-select uk-border-rounded" id="form-daire">
                        <option value="" disabled selected>Daire Tipi...</option>
                        <option value="1">1 + 1</option>
                        <option value="2">2 + 0</option>
                        <option value="3">2 + 1</option>
                        <option value="4">2 + 1 Dubleks</option>
                        <option value="5">3 + 1 Dubleks</option>
                        <option value="6">4 + 1 Dubleks</option>
                    </select>
                </div>
            </div>

            <div class="uk-margin-top">
                <button class="uk-button uk-button-primary uk-width-1-1">Başvur</button>
            </div>
        </form>
    </div>
</div>
<!-- kayit formu -->

</div>

<?php include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/template-config.js"></script>

</body>
</html>
