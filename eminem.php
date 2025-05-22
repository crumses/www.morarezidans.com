<!DOCTYPE html>
<html lang="tr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<?php include 'header.php'; ?>
<style>
#icerik-wrapper {
  display: flex;
  height: calc(100vh - HEADER_HEIGHT - FOOTER_HEIGHT);
}   
#mahmudiye {
  width: 50%;
  height: 100%;
  background-color: #f0f0f0;
  overflow: auto;
}
#kroki {
  width: 50%;
  height: 88vh; 
  background-image: url('resimler/kroki.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
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
    background-color: rgba(0, 112, 52, 0.7); 
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
    background-color:rgb(149, 158, 160); 
    color: #fff;
}
.cerceve {
    background-color: transparent;
    color: #F25E86; 
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
    color: #F25E86; 
    border: 2px solid #F25E86;
    font-weight: bold;
    width: 46px;    
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;6
    font-size: 14px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
}
.asansor {
    width: 15px;
    height: 75px;
    background-color:rgb(255, 255, 255); 
    color: transparent;
    border: none;
}
.mahmudiye {
    margin-top: 50px;
    height: 50%; 
    width: 50%;  
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgb(255, 255, 255);
    padding: 20px;
    border-radius: 10px;
    border: 8px solid #00706C; 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    overflow: hidden; 
}

.mahmudiye > * {
    flex: 1; 
    width: 100%; 
    height: 100%; 
    box-sizing: border-box;
    overflow: auto;
}
.kat-bar button.aktif {
    background-color: rgb(10, 194, 166); 
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
    background-color: rgb(10, 194, 166);
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
.dikeykare {
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

.kare:hover, .dikeykare:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
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
.buyuk-sayi {
    font-family: 'DM Mono', monospace;
    font-size: 18px; 
    font-weight: 500;
    color: #F5FFFD;
    text-shadow: 0 0.5px 1px rgba(0, 0, 0, 0.2);
    margin: 0;
    padding: 0;
    line-height: 1;
    letter-spacing: 0.3px;
    text-align: center;
}
.kucuk-sayi {
    font-family: 'Poppins', sans-serif;
    font-size: 12px; 
    font-weight: normal;
    color: #BCDAD7;
    margin-top: 2px;
    padding: 0;
    line-height: 1.2;
    letter-spacing: 0.3px;
    text-align: center;
    animation: fade-in 0.4s ease-in;
}



@media (max-width: 768px) {
    #icerik-wrapper {
    display: flex;
    flex-direction: column;
    height: auto;
    margin: 0;
    padding: 0;
    max-width: 100%;
  }
  #kroki {
    width: 100%;
    height: 50vh;
    background-image: url('resimler/kroki.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .kat-bar-wrapper {
  overflow-x: auto;
  white-space: nowrap;
  width: 100%;
}

.kat-bar {
  display: inline-flex;
  gap: 8px;
  padding: 10px;
  width: max-content;
}

  .mahmudiye {
    width: 90vw ;
    overflow-x: hidden;
    white-space: nowrap;
    padding: 10px;
  }

  .kare-satir {
    display: flex;
    flex-wrap: nowrap;
    margin-bottom: 10px;
  }

  .kare {
    min-width: 80px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    border: 1px solid #ccc;
    background-color:rgba(0, 112, 52, 0.7);
  }

  .yangin , .dikeykare{
    min-width: 80px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 13px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    background-color: transparent;
    color: #F25E86;
    border: 2px solid #F25E86;
    font-weight: bold;
  }
  .cerceve{
    min-width: 80px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    background-color: transparent;
    color: #F25E86;
    border: 2px solid #F25E86;
    font-weight: bold;
  }

  .asansor {
    min-width: 10px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    
    background-color:rgb(255, 255, 255);
  }


  .bosdaire {
    min-width: 80px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    border: 1px solid #ccc;
    background-color:rgb(149, 158, 160);
  }

  .buyuk-sayi {
    font-size: 18px;
    font-weight: bold;
    line-height: 1.5;
  }

  .kucuk-sayi {
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5;
  }

  .modal-content {
    width: 90%;
    font-size: 14px;
  }
}



.bosdaire {
    background-color: #a8e6cf !important;
}

.dolu {
    background-color: #ff8b94 !important;
}




.yesil {
    background-color: rgba(0, 112, 52, 0.7);
}

.gri {
    background-color: rgb(149, 158, 160); 
}



</style>
</head>
<body>
<div id="icerik-wrapper">
    <div class="mahmudiye">
    <div class="kat-bar-wrapper">
  <div class="kat-bar">
      <button onclick="goToFloor(1)">1. Kat</button>
      <button onclick="goToFloor(2)">2. Kat</button>
      <button onclick="goToFloor(3)">3. Kat</button>
      <button onclick="goToFloor(4)">4. Kat</button>
      <button onclick="goToFloor(5)">5. Kat</button>
  </div>
</div>

    <div id="kat-1" class="kareler-container">
    <div class="kare-satir">

                   
    <div class="kare  " onclick="openModal('modal6')">
        <span class="buyuk-sayi">16</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
        <div class="kare  " onclick="openModal('modal6')">
        <span class="buyuk-sayi">15</span>
        <span class="kucuk-sayi">1 + 1</span>
        </div>
            
            <div class="asansor"></div>

            <div class="yangin">Asansör</div>
         
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
        const buttons = document.querySelectorAll('.kat-bar button');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Tüm butonlardan 'aktif' sınıfını kaldır
        buttons.forEach(btn => btn.classList.remove('aktif'));

        // Tıklanan butona 'aktif' sınıfını ekle
        button.classList.add('aktif');
    });
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