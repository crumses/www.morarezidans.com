
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MORA REZİDANS</title>
    <link rel="shortcut icon" href="ikinciresimler/logosiyaharkaplanbeyaz.jpg" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media-query.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    
    <style>
       
/* 9 parçalı grid yapısı */
.impx-navbar-wrapper {
    display: grid;
    grid-template-columns: repeat(4, 1fr) 1.5fr repeat(4, 1fr); 
    align-items: center;
    height: 100px;
    padding: 0 40px;
    gap: 10px;
}


/* Ortadaki logo */
.impx-navbar-logo {
    grid-column: 5 ;
    display: flex;
    justify-content: center;  
    align-items: center;      
   
    height: 100%;             
}


.impx-logo {
    height: 80px;
    max-width: 100%;
    object-fit: contain;
}
.impx-navbar-item a {
    white-space: nowrap;
    padding: 0 8px;
    font-size: 15px;
}



.impx-logo img {
    
   
    height: 80px;
    width: auto;
    max-height: 100%;
    object-fit: contain;
    display: block;
    transform: translateX(22.5%); /* sola kaydırmak için negatif ver: -5% */
}


.impx-navbar-item {
    display: flex;
    justify-content: center;
    align-items: center;
}

.uk-navbar-nav {
    display: flex;
    gap: 10px;
}



.impx-navbar-item div {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 16px;
    transform: scale(1.15); /* ~%15 büyüme */
    transform-origin: center;
    display: inline-block;
    letter-spacing: 0.5px;
    color: #111;
    transition: all 0.3s ease;
}


.impx-navbar-item div:hover {
    color: #0097a7;
    border-bottom: 2px solid #0097a7; 
    padding-bottom: 4px;
}








    </style>
</head>
<body class="impx-body" id="top">

<header id="impx-header">
    <div>
        <div data-uk-sticky="top: .impx-slide-container; animation: uk-animation-slide-top">

            
            <div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
                <div class="uk-offcanvas-bar">
                    <ul class="uk-nav uk-nav-default">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="odalar.php">Odalar</a></li>
                        <li><a href="moradaYasam.php">Mora'da Yaşam</a></li>
                        <li><a href="galeri.php">Galeri</a></li>

                        
                        <li><a href="gym.php">Mora Gym</a></li>
                        <li><a href="iletisim.php">İletişim</a></li>
                        <li><a href="hakkimizda.php">Hakkımızda</a></li>
                        <li><a href="kayit.php">Kayıt</a></li>
                        
                       
                    </ul>
                </div>
            </div>
            <a href="#mobile-nav" class="uk-hidden@xl uk-hidden@l uk-hidden@m mobile-nav" data-uk-toggle="target: #mobile-nav">
                <i class="fa fa-bars"></i> 
            </a>

            <div class="uk-width-expand uk-position-relative">
            <nav class="uk-navbar-container uk-visible@s uk-visible@m">
            <div class="impx-navbar-wrapper">

<div class="impx-navbar-item"><a href="index.php"><div>Anasayfa</div></a></div>
<div class="impx-navbar-item"><a href="odalar.php"><div>Odalar</div></a></div>
<div class="impx-navbar-item"><a href="moradaYasam.php"><div>Mora'da Yaşam</div></a></div>
<div class="impx-navbar-item"><a href="galeri.php"><div>Galeri</div></a></div>

<div class="impx-navbar-logo">
    <a href="index.php" class="impx-logo">
        <img src="ikinciresimler/logosiyah1.png" alt="Logo">
    </a>
</div>

<div class="impx-navbar-item"><a href="gym.php"><div>Mora Gym</div></a></div>
<div class="impx-navbar-item"><a href="iletisim.php"><div>İletişim</div></a></div>
<div class="impx-navbar-item"><a href="hakkimizda.php"><div>Hakkımızda</div></a></div>
<div class="impx-navbar-item"><a href="kayit.php"><div>Kayıt</div></a></div>

</div>

</nav>

            </div>

        </div>
    </div>
</header>

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>

