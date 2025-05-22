<!DOCTYPE html>
<html lang="tr">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<?php include 'header.php'; ?>
<style>


#icerik-wrapper {
  display: flex;
  height: calc(100vh - HEADER_HEIGHT - FOOTER_HEIGHT);
  /* HEADER_HEIGHT ve FOOTER_HEIGHT'ı ölçmemiz gerek, örneğin 100px + 50px gibi */
}

#mahmudiye {
  width: 50%;
  height: 100%;
  background-color: #f0f0f0;
  overflow: auto;
}

#kroki {
  width: 50%;
  height: 88vh; /* ekranın tamamı kadar yükseklik */
  background-image: url('resimler/kroki.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

    
.alt-harf {
    margin-bottom: 4px;
    text-align: center;
    width: 100%;
    font-size: 20px;
    color: transparent; /* Görünmez */
    background-color: #fafafa; /* Sayfa arka planı ile aynı */
}

.kare{
    width: 50px;    
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}

.kare {
    background-color:#00706C; /* Sativa aqua */
    color: #fff;
}

.bosdaire{
    width: 50px;    
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    background-color:rgb(149, 158, 160); /* Sativa aqua */
    color: #fff;
}




.cerceve {
    background-color: transparent;
    color: #F25E86; /* Sativa red */
    border: 2px solid #F25E86;
    font-weight: bold;
    width: 46.5px;    
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 16px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}
.yangin {
    background-color: transparent;
    color: #F25E86; /* Sativa red */
    border: 2px solid #F25E86;
    font-weight: bold;
    width: 46px;    
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 14px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}
.bosluk {
    background-color: transparent;
    color:rgb(255, 255, 255); /* Sativa red */
    border: 2px solidrgb(255, 255, 255);
    font-weight: bold;
    width: 72px;    
    height: 75px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}

.daire-no {
    font-size: 24px;
}

.fiyat-ic {
    font-size: 16px;
    margin-top: 2px;
    font-weight: bold;
    color:		#FFFF00; /* Sativa gold */
}

.boskare {
    width: 75px;
    height: 75px;
    background-color:rgb(157, 71, 71); /* Hafif gri zemin */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    color: #444;
}

.asansor {
    width: 15px;
    height: 75px;
    background-color:rgb(255, 255, 255); /* Görünmez olması için sayfa rengi */
    color: transparent;
    border: none;
}
.ismail {
    width: 0px;
    height: 75px;
    background-color:rgb(70, 30, 179); /* Görünmez olması için sayfa rengi */
    color: transparent;
    border: none;
}
.koridor {
    width: 75px;
    height: 25px;
    background-color:rgb(173, 236, 241); /* Görünmez olması için sayfa rengi */
    color: transparent;
    border: none;
}

.mahmudiye {
    margin-top: 50px;
    height: 50%; /* Yüksekliği %50 yapıyoruz */
    width: 50%;  /* Genişliği %50 yapıyoruz */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    border: 8px solid rgb(10, 194, 166); /* Gold border */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    overflow: hidden; /* Taşmayı engeller */
}

.mahmudiye > * {
    flex: 1; /* İçeriklerin büyüyüp küçülmesini sağlar */
    width: 100%; /* İçeriklerin genişliği konteynerin genişliğine göre ayarlanır */
    height: 100%; /* İçeriklerin yüksekliği konteynerin yüksekliğine göre ayarlanır */
    box-sizing: border-box; /* Padding ve border dahil edilerek boyut hesaplanır */
    overflow: auto; /* İçerik taşarsa kaydırma çubuğu ekler */
}


.kat-bar {
    display: flex;
    justify-content: center;
    
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
}

.kat-bar button {
    background-color:rgb(76, 110, 133);
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    margin: 0 5px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.kat-bar button:hover {
    background-color: #00706C;
    transform: translateY(-2px);
}

.kat-bar button:active {
    transform: translateY(0);
}

.kareler-container {
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px;
}

.kare-satir {
    display: flex;
}

.yatay-kare, .dikeykare {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.yatay-kare {
    width: 100px;
    height: 75px;
    background-color: #c29336;
    color: #fff;
}

.dikeykare {
    width: 50px;
    height: 50px;
    border: 2px solid #F25E86;
    color: #F25E86;
    background-color: transparent;
    font-weight: bold;
    flex-direction: column;
    font-size: 14px;
    text-align: center;
    padding: 4px;
}

.kare:hover, .yatay-kare:hover, .dikeykare:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

.solbosluk {
    margin-left: 110px;
}

.solboslukaz {
    margin-left: 20px;
}

.yukaridan {
    position: relative;
    top: 25px;
}

.yukaridan1 {
    position: relative;
    top: 50px;
}
.yukaridan2 {
    position: relative;
    top: 60px;
}
.yukaridan3 {
    position: relative;
    top: 35px;
}

.asagidan {
    position: relative;
    bottom: 50px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #ffffff;
    margin: 15% auto;
    padding: 20px;
    border: none;
    width: 50%;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    color: #333;
}

.close {
    color: #31a9a9;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.close:hover,
.close:focus {
    color: #00706C;
    text-decoration: none;
    cursor: pointer;
}

.cerceve-dikey {
    background-color: transparent;
    color: #F25E86; /* Sativa red */
    border: 2px solid #F25E86;
    font-weight: bold;
    width: 60px;
    height: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    text-align: center;
    padding: 4px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

/* Ayırıcı çizgi */
.ayirici {
    width: 80%;
    height: 1px;
    background-color: #F25E86;
    margin: 4px 0;
}

/* Hover efekti: kutu büyür ve gölge eklenir */
.cerceve-dikey:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
}

/* Yazı hover efekti */
.cerceve-dikey div:hover {
    color: #fff;
    background-color: #F25E86;
    border-radius: 4px;
    padding: 2px 0;
}

/* Ekstra animasyon efekti */
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.cerceve-dikey:hover {
    animation: pulse 1s infinite;
}



.buyuk-sayi {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 32px;
    font-weight: normal;
    color: #FFFFFF;
    text-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
    margin: 0;
    padding: 0;
    line-height: 1.2;
    text-align: center; 
    overflow: hidden;
    animation: sayi-giris 0.8s ease-out forwards;
}

.kucuk-sayi {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #D8D8D8;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    margin: 4px 0 0 0; 
    padding: 0;
    line-height: 1.4;
    text-align: center;
    overflow: hidden;
    animation: yazi-giris 1s ease-out forwards;
}



@keyframes sayi-giris {
  from {
    opacity: 0;
    transform: translateY(-10px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

@keyframes yazi-giris {
  from {
    opacity: 0;
    transform: translateY(5px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}






</style>


</head>
<body>
<div id="icerik-wrapper">
    <div class="mahmudiye">
    <div class="kat-bar">
        <button onclick="goToFloor(1)">1. Kat</button>
        <button onclick="goToFloor(2)">2. Kat</button>
        <button onclick="goToFloor(3)">3. Kat</button>
        <button onclick="goToFloor(4)">4. Kat</button>
        <button onclick="goToFloor(5)">5. Kat</button>
    </div>
    <div id="kat-1" class="kareler-container">
    <div class="kare-satir">

    <div class="bosdaire  " onclick="openModal('modal6')"> 
        <span class="buyuk-sayi">16</span>
        <span class="kucuk-sayi">1 + 1</span>
    </div>
            
            <div class="asansor"></div>

            <div class="yangin">Asansör</div>

            <div class="kare  " onclick="openModal('modal6')">
            <span class="buyuk-sayi">K1</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
        <div class="yangin">Yangın Çıkışı</div>
        <div class="kare  " onclick="openModal('modal6')">
        <span class="buyuk-sayi">17</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare  " onclick="openModal('modal6')">
        <span class="buyuk-sayi">18</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
            <div class="kare  " onclick="openModal('modal6')">
            <span class="buyuk-sayi">19</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="kare  " onclick="openModal('modal6')">
            <span class="buyuk-sayi">K2</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin">Yangın Çıkışı</div>
            <div class="asansor"></div>
            <div class="kare  " onclick="openModal('modal6')">
            <span class="buyuk-sayi">20</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            
        
    </div>
    

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">
        <span class="buyuk-sayi">15</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        
        <div class="asansor"></div>
        <div class="kare yukaridan " onclick="openModal('modal6')">
        <span class="buyuk-sayi">29</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal2')">
        <span class="buyuk-sayi">28</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal4')">
        <span class="buyuk-sayi">27</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal5')">
        <span class="buyuk-sayi">26</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal2')">
        <span class="buyuk-sayi">25</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal6')">
        <span class="buyuk-sayi">24</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal6')">
        <span class="buyuk-sayi">23</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan" onclick="openModal('modal6')">
        <span class="buyuk-sayi">22</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
        <div class="kare  yukaridan" onclick="openModal('modal6')">
        <span class="buyuk-sayi">21</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal4')">
        <span class="buyuk-sayi">14</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
       
        <div class="cerceve yukaridan3">İ</div>
        <div class="cerceve yukaridan3">Ç</div>
        <div class="cerceve yukaridan3"></div>
        <div class="cerceve yukaridan3">B</div>
        <div class="cerceve yukaridan3">A</div>
        <div class="cerceve yukaridan3">H</div>
        <div class="cerceve yukaridan3">Ç</div>
        <div class="cerceve yukaridan3">E</div>
        
        <div class="asansor"></div>
        <div class="dikeykare  yukaridan3" onclick="openModal('modal6')">Toplantı <br> Odası</div>
        
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal5')">
        <span class="buyuk-sayi">13</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
        <div class="kare  yukaridan1" onclick="openModal('modal3')">
        <span class="buyuk-sayi">30</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan1" onclick="openModal('modal2')">
        <span class="buyuk-sayi">31</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan1" onclick="openModal('modal4')">
        <span class="buyuk-sayi">32</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan1" onclick="openModal('modal1')">
        <span class="buyuk-sayi">33</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare yukaridan1" onclick="openModal('modal4')">
        <span class="buyuk-sayi">34</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="yangin yukaridan1">Yangın Çıkışı</div>
        <div class="kare   yukaridan1" onclick="openModal('modal5')">
        <span class="buyuk-sayi">35</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare  yukaridan1" onclick="openModal('modal2')">
        <span class="buyuk-sayi">36</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
        <div class="kare yukaridan1" onclick="openModal('modal6')">
        <span class="buyuk-sayi">1</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        
    </div>

    <div class="kare-satir">
        <div class="kare" onclick="openModal('modal1')">
        <span class="buyuk-sayi">12</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
    </div>

    <div class="kare-satir">
        
        <div class="kare" onclick="openModal('modal2')">
        <span class="buyuk-sayi">11</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="asansor"></div>
        <div class="kare" onclick="openModal('modal1')">
        <span class="buyuk-sayi">10</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal3')">
        <span class="buyuk-sayi">9</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal4')">
        <span class="buyuk-sayi">8</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal5')">
        <span class="buyuk-sayi">7</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal6')">
        <span class="buyuk-sayi">6</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal1')">
        <span class="buyuk-sayi">5</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal3')">
        <span class="buyuk-sayi">4</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare" onclick="openModal('modal4')">
        <span class="buyuk-sayi">3</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        
        <div class="kare" onclick="openModal('modal6')">
        <span class="buyuk-sayi">2</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
    </div>
</div>



    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h2>1+0 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 1')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>1+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 3')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>2+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 4')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2>3+0 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 5')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2>3+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 6')">Rezervasyon Yap</button>
        </div>
    </div>

    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h2>4+1 bilgileri fotoları</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap('Daire 7')">Rezervasyon Yap</button>
        </div>
    </div>
    </div>
    <div id="kroki">
    <!-- Sadece arkaplan resmi görünecek -->
  </div>
</div>
    <?php include 'footer.php'; ?>
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        window.onclick = function(event) {
            var modals = document.querySelectorAll('.modal');
            modals.forEach(function(modal) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        }

        function rezervasyonYap(daire) {
            alert(daire + " için rezervasyon başarıyla alındı!");
            closeModal('modal' + daire.split(' ')[1]);
        }

        function goToFloor(katNumarasi) {
            // Tüm katları gizle
            let katlar = document.querySelectorAll('.kareler-container');
            katlar.forEach(kat => kat.style.display = 'none');

            // Seçilen katı göster
            document.getElementById(`kat-${katNumarasi}`).style.display = 'block';
        }

        // Sayfa yüklendiğinde 1. katı göster
        document.addEventListener('DOMContentLoaded', function() {
            goToFloor(1);
        });
        
    </script>
    <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/template-config.js"></script>
</body>
</html>