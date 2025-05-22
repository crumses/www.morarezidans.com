

<!DOCTYPE html>
<html lang="tr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<?php include 'header.php'; ?>
<style>
.kat-bar-wrapper {
    flex: initial !important;
    width: auto !important;
    height: auto !important;
    overflow: visible !important;
}

#icerik-wrapper {
  display: flex;
    height: 100vh;
}   
#mahmudiye {
  width: 50%;
  height: 100%;
  background-color: #f0f0f0;
  overflow: auto;
}
#kroki {
  width: 50%;
  height: 100%; 
  background-image: url('resimler/revizeDroneFotograrf.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.kare,.kare-bos,.kare-dolu,.kare-bosalacak{
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
.kare-bos {
    background-color: rgba(0, 112, 52, 0.7); 
    
    color: #fff;
}
.kare-dolu {
    background-color: rgb(149, 158, 160); 
    
    color: #fff;
}
.kare-bosalacak {
    background-color: rgb(81, 119, 200); 
    
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
    align-items: center;
    font-size: 14px;
    cursor: pointer;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    
    text-orientation: upright; 
}
.yangin2 {
    background-color: transparent;
    color: #F25E86; 
    border: 2px solid #F25E86;
    font-weight: bold;
    width: 27px; 
    height: 50px;
    display: flex;
    flex-direction: column; 
    justify-content: center;
    align-items: center;
    font-size: 10px;
    cursor: pointer;
    margin-left: -10px;
    
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    
    text-orientation: upright; 
}


.asansor {
    width: 15px;
    height: 75px;
    background-color:rgb(255, 255, 255);
    color: transparent;
    border: none;
}
.mahmudiye {
    margin-top: 25px;
  
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
    background-color: rgb(76, 110, 133);
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


.tikla-button-wrapper {
    display: flex;
    justify-content: center; 
    margin-top: -20px; 
}

.tikla-button {
    background-color: rgb(76, 110, 133);
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    margin-bottom:5px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}


.tikla-button:hover {
    background-color: rgb(10, 194, 166);
    transform: translateY(-2px);
}


.tikla-button:active {
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
    font-weight: 300;
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
    background-image: url('resimler/revizeDroneFotograrf.jpg');
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

  .kare,.kare-bos,.kare-dolu,.kare-bosalacak {
    min-width: 80px;
    min-height: 80px;
    flex: 0 0 auto;
    margin: 4px;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
   
  }
  

  .yangin{
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
  .yangin2 {
    background-color: transparent;
    color: #F25E86;
    border: 2px solid #F25E86;
    font-weight: bold;
    min-width: 42px;
    min-height: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 11px; 
    cursor: pointer;
    margin-left: -5px;
    margin-bottom: 10px;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 4px;
    writing-mode: vertical-rl; 
    text-orientation: upright; 
    overflow: hidden; 
    
}
  .dikeykare{
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
  <div class="tikla-button-wrapper">
                <button class="tikla-button">Eylülden Sonrası İçin<br>Boş Olan Dairelerimiz</button>
            </div>
            
</div>

<div id="kat-1" class="kareler-container">
    <div class="kare-satir">
            <div id="d16" class="kare" onclick="openModal('modal6')"> 
                <span class="buyuk-sayi">16</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>   
            <div class="asansor"></div>
            <div class="yangin">Asansör</div>
            <div id="dK1" class="kare" onclick="openModal('modal6')">
                <span class="buyuk-sayi">K1</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin">Yangın <br>Çıkışı</div>
            <div id="d17" class="kare-bosalacak" onclick="openModal('modal6')">
                <span class="buyuk-sayi">17</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d18" class="kare-dolu  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">18</span>
                <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d19" class="kare-bos  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">19</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="dK2" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">K2</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin">Yangın <br>Çıkışı</div>
            <div class="asansor"></div>
            <div id="d20" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">20</span>
                <span class="kucuk-sayi">3 + 0</span>
            </div>
    </div>    
    <div class="kare-satir">
            <div id="d15" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">15</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>    
            <div class="asansor"></div>
            <div id="d29" class="kare yukaridan " onclick="openModal('modal6')">
            <span class="buyuk-sayi">29</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d28" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">28</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d17" class="kare yukaridan" onclick="openModal('modal4')">
            <span class="buyuk-sayi">27</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d26" class="kare yukaridan" onclick="openModal('modal5')">
            <span class="buyuk-sayi">26</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d25" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">25</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d24" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">24</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d23" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">23</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d22" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">22</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d21" class="kare  yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">21</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d14" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">14</span>
            <span class="kucuk-sayi">2 + 0</span>
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
            <div id="d13" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">13</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d30" class="kare  yukaridan1" onclick="openModal('modal3')">
            <span class="buyuk-sayi">30</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d31" class="kare yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">31</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d32" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">32</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d33" class="kare yukaridan1" onclick="openModal('modal1')">
            <span class="buyuk-sayi">33</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d34" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">34</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="yangin yukaridan1">Yangın <br>Çıkışı</div>
            <div id="d35" class="kare   yukaridan1" onclick="openModal('modal5')">
            <span class="buyuk-sayi">35</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d36" class="kare  yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">36</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d1" class="kare yukaridan1" onclick="openModal('modal6')">
            <span class="buyuk-sayi">1</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d12" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">12</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            </div>
            <div class="kare-satir">
            <div id="d11" class="kare" onclick="openModal('modal2')">
            <span class="buyuk-sayi">11</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d10" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">10</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d9" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">9</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d8" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">8</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d7" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">7</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d6" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">6</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d5" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">5</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d4" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">4</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d3" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">3</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div id="d2" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">2</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
    </div>
</div>





<div id="kat-2" class="kareler-container">
    <div class="kare-satir">
            <div id="d52" class="kare" onclick="openModal('modal6')"> 
                <span class="buyuk-sayi">52</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>   
            <div class="asansor"></div>
            <div class="yangin2">Asansör</div>
            <div id="d53" class="kare" onclick="openModal('modal6')">
                <span class="buyuk-sayi">53</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın <br>Çıkışı</div>
            <div id="d54" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">54</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d55" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">55</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d56" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">56</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d57" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">57</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d58" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">58</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d59" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">59</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın <br>Çıkışı</div>
            
            <div id="d60" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">60</span>
                <span class="kucuk-sayi">3 + 0</span>
            </div>
    </div>    
    <div class="kare-satir">
            <div id="d51" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">51</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>    
            <div class="asansor"></div>
            <div id="d69" class="kare yukaridan " onclick="openModal('modal6')">
            <span class="buyuk-sayi">69</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d68" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">68</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d67" class="kare yukaridan" onclick="openModal('modal4')">
            <span class="buyuk-sayi">67</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d66" class="kare yukaridan" onclick="openModal('modal5')">
            <span class="buyuk-sayi">66</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d65" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">65</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d64" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">64</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d63" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">63</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d62" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">62</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d61" class="kare  yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">61</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d50" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">50</span>
            <span class="kucuk-sayi">2 + 0</span>
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
            <div id="d49" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">49</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d70" class="kare  yukaridan1" onclick="openModal('modal3')">
            <span class="buyuk-sayi">70</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d71" class="kare yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">71</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d72" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">72</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d73" class="kare yukaridan1" onclick="openModal('modal1')">
            <span class="buyuk-sayi">73</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d74" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">74</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin yukaridan1">Yangın<br> Çıkışı</div>
            <div id="d75" class="kare   yukaridan1" onclick="openModal('modal5')">
            <span class="buyuk-sayi">75</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d76" class="kare  yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">76</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d37" class="kare yukaridan1" onclick="openModal('modal6')">
            <span class="buyuk-sayi">37</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d48" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">48</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            </div>

            <div class="kare-satir">
            <div id="d47" class="kare" onclick="openModal('modal2')">
            <span class="buyuk-sayi">47</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d46" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">46</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d45" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">45</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d44" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">44</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d43" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">43</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d42" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">42</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d41" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">41</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d40" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">40</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d39" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">39</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d38" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">38</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
    </div>
</div>





<div id="kat-3" class="kareler-container">
    <div class="kare-satir">
            <div id="d92" class="kare" onclick="openModal('modal6')"> 
                <span class="buyuk-sayi">92</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>   
            <div class="asansor"></div>
            <div class="yangin2">Asansör</div>
            <div id="d93" class="kare" onclick="openModal('modal6')">
                <span class="buyuk-sayi">93</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın<br> Çıkışı</div>
            <div id="d94" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">94</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d95" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">95</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d96" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">96</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d97" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">97</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d98" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">98</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d99" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">99</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın <br>Çıkışı</div>
            
            <div id="d100" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">100</span>
                <span class="kucuk-sayi">3 + 0</span>
            </div>
    </div>    
    <div class="kare-satir">
            <div id="d91" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">91</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>    
            <div class="asansor"></div>
            <div id="d109" class="kare yukaridan " onclick="openModal('modal6')">
            <span class="buyuk-sayi">109</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d108" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">108</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d107" class="kare yukaridan" onclick="openModal('modal4')">
            <span class="buyuk-sayi">107</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d106" class="kare yukaridan" onclick="openModal('modal5')">
            <span class="buyuk-sayi">106</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d105" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">105</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d104" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">104</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d103" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">103</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d102" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">102</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d101" class="kare  yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">101</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d90" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">90</span>
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
            <div id="d89" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">89</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d110" class="kare  yukaridan1" onclick="openModal('modal3')">
            <span class="buyuk-sayi">110</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d111" class="kare yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">111</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d112" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">112</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d113" class="kare yukaridan1" onclick="openModal('modal1')">
            <span class="buyuk-sayi">113</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d114" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">114</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin yukaridan1">Yangın<br> Çıkışı</div>
            <div id="d115" class="kare   yukaridan1" onclick="openModal('modal5')">
            <span class="buyuk-sayi">115</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d116" class="kare  yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">116</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d77" class="kare yukaridan1" onclick="openModal('modal6')">
            <span class="buyuk-sayi">77</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d88" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">88</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            </div>
            <div class="kare-satir">
            <div id="d87" class="kare" onclick="openModal('modal2')">
            <span class="buyuk-sayi">87</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d86" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">86</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d85" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">85</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d84" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">84</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d83" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">83</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d82" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">82</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d81" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">81</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d80" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">80</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d79" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">79</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d78" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">78</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
    </div>
</div>





<div id="kat-4" class="kareler-container">
    <div class="kare-satir">
            <div id="d132" class="kare" onclick="openModal('modal6')"> 
                <span class="buyuk-sayi">132</span>
                <span class="kucuk-sayi">2 + 1</span>
            </div>   
            <div class="asansor"></div>
            <div class="yangin2">Asansör</div>
            <div id="d133" class="kare" onclick="openModal('modal6')">
                <span class="buyuk-sayi">133</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın<br> Çıkışı</div>
            <div id="d134" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">134</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d135" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">135</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d136" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">136</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d137" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">137</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d138" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">138</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d139" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">139</span>
                <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin2">Yangın <br>Çıkışı</div>
            
            <div id="d140" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">140</span>
                <span class="kucuk-sayi">3 + 0</span>
            </div>
    </div>    
    <div class="kare-satir">
            <div id="d131" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">131</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>    
            <div class="asansor"></div>
            <div id="d149" class="kare yukaridan " onclick="openModal('modal6')">
            <span class="buyuk-sayi">149</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d148" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">148</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d147" class="kare yukaridan" onclick="openModal('modal4')">
            <span class="buyuk-sayi">147</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d146" class="kare yukaridan" onclick="openModal('modal5')">
            <span class="buyuk-sayi">146</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d145" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">145</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d144" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">144</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d143" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">143</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d142" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">142</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d141" class="kare  yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">141</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d130" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">130</span>
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
            <div id="d129" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">129</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            <div id="d150" class="kare  yukaridan1" onclick="openModal('modal3')">
            <span class="buyuk-sayi">150</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d151" class="kare yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">151</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d152" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">152</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d153" class="kare yukaridan1" onclick="openModal('modal1')">
            <span class="buyuk-sayi">153</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d154" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">154</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="yangin yukaridan1">Yangın<br> Çıkışı</div>
            <div id="d155" class="kare   yukaridan1" onclick="openModal('modal5')">
            <span class="buyuk-sayi">155</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d156" class="kare  yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">156</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d117" class="kare yukaridan1" onclick="openModal('modal6')">
            <span class="buyuk-sayi">117</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d128" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">128</span>
            <span class="kucuk-sayi">2 + 0</span>
            </div>
            <div class="asansor"></div>
            </div>
            <div class="kare-satir">
            <div id="d127" class="kare" onclick="openModal('modal2')">
            <span class="buyuk-sayi">127</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d126" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">126</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div id="d125" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">125</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d124" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">124</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d123" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">123</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d122" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">122</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d121" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">121</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d120" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">120</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d119" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">119</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
            <div id="d118" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">118</span>
            <span class="kucuk-sayi">1 + 1</span>
            </div>
    </div>
</div>





<div id="kat-5" class="kareler-container">
    <div class="kare-satir">
            <div id="d172" class="kare" onclick="openModal('modal6')"> 
                <span class="buyuk-sayi">172</span>
                <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>   
            <div class="asansor"></div>
            <div class="yangin2">Asansör</div>
            <div id="d173" class="kare" onclick="openModal('modal6')">
                <span class="buyuk-sayi">173</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div class="yangin2">Yangın <br>Çıkışı</div>
            <div id="d174" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">174</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d175" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">175</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d176" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">176</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d177" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">177</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d178" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">178</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d179" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">179</span>
                <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div class="yangin2">Yangın<br> Çıkışı</div>
            
            <div id="d180" class="kare  " onclick="openModal('modal6')">
                <span class="buyuk-sayi">180</span>
                <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
    </div>    
    <div class="kare-satir">
            <div id="d171" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">171</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>    
            <div class="asansor"></div>
            <div id="d189" class="kare yukaridan " onclick="openModal('modal6')">
            <span class="buyuk-sayi">189</span>
            <span class="kucuk-sayi">4 + 1 (D)</span>
            </div>
            <div id="d188" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">188</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d187" class="kare yukaridan" onclick="openModal('modal4')">
            <span class="buyuk-sayi">187</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d186" class="kare yukaridan" onclick="openModal('modal5')">
            <span class="buyuk-sayi">186</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d185" class="kare yukaridan" onclick="openModal('modal2')">
            <span class="buyuk-sayi">185</span>
            <span class="kucuk-sayi">1 + 1 (D)</span>
            </div>
            <div id="d184" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">184</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d183" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">183</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d182" class="kare yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">182</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div class="asansor"></div>
            <div id="d181" class="kare  yukaridan" onclick="openModal('modal6')">
            <span class="buyuk-sayi">181</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d170" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">170</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
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
            <div id="d169" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">169</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div class="asansor"></div>
            <div id="d190" class="kare  yukaridan1" onclick="openModal('modal3')">
            <span class="buyuk-sayi">190</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d191" class="kare yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">191</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d192" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">192</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d193" class="kare yukaridan1" onclick="openModal('modal1')">
            <span class="buyuk-sayi">193</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d194" class="kare yukaridan1" onclick="openModal('modal4')">
            <span class="buyuk-sayi">194</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div class="yangin yukaridan1">Yangın<br> Çıkışı</div>
            <div id="d195" class="kare   yukaridan1" onclick="openModal('modal5')">
            <span class="buyuk-sayi">195</span>
            <span class="kucuk-sayi">4 + 1 (D)</span>
            </div>
            <div id="d196" class="kare  yukaridan1" onclick="openModal('modal2')">
            <span class="buyuk-sayi">196</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div class="asansor"></div>
            <div id="d157" class="kare yukaridan1" onclick="openModal('modal6')">
            <span class="buyuk-sayi">157</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
    </div>

    <div class="kare-satir">
            <div id="d168" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">168</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div class="asansor"></div>
            </div>
            <div class="kare-satir">
            <div id="d167" class="kare" onclick="openModal('modal2')">
            <span class="buyuk-sayi">167</span>
            <span class="kucuk-sayi">2 + 1</span>
            </div>
            <div class="asansor"></div>
            <div id="d166" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">166</span>
            <span class="kucuk-sayi">3 + 1 (D)</span>
            </div>
            <div id="d165" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">165</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d164" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">164</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d163" class="kare" onclick="openModal('modal5')">
            <span class="buyuk-sayi">163</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d162" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">162</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d161" class="kare" onclick="openModal('modal1')">
            <span class="buyuk-sayi">161</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d160" class="kare" onclick="openModal('modal3')">
            <span class="buyuk-sayi">160</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d159" class="kare" onclick="openModal('modal4')">
            <span class="buyuk-sayi">159</span>
            <span class="kucuk-sayi">2 + 1 (D)</span>
            </div>
            <div id="d158" class="kare" onclick="openModal('modal6')">
            <span class="buyuk-sayi">158</span>
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