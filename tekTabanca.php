<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mora Rezidans</title>
    <style>
        
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background-color: black;
            display: none; 
        }

        #video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #play-button {
            z-index: 1001;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .kareler-container {
            display: none; /* Başlangıçta gizli */
            flex-direction: column;
            align-items: flex-start;
            margin-left: 20px;
        }

        .kare-satir {
            display: flex;
        }

        .kare, .yatay-kare, .dikeykare {
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .solbosluk {
            margin-left: 110px;
        }

        .solboslukaz {
            margin-left: 20px;
        }

        .kare {
            width: 75px;
            height: 75px;
            background-color: rgba(76, 175, 80, 0.7);
        }

        .boskare {
            width: 75px;
            height: 75px;
        }

        .yukaridan {
            position: relative;
            top: 50px;
        }

        .asagidan {
            position: relative;
            bottom: 50px;
        }

        .yatay-kare {
            width: 100px;
            height: 75px;
            background-color: rgba(255, 152, 0, 0.7);
        }

        .dikeykare {
            width: 75px;
            height: 100px;
            background-color: rgba(255, 152, 0, 0.7);
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
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        #anasayfa-butonu {
    position: fixed;
    top: 20px; 
    left: 50%; 
    transform: translateX(-50%); 
    padding: 10px 20px;
    font-size: 16px;
    background-color:rgb(230, 185, 7);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    z-index: 1002; 
}

#anasayfa-butonu:hover {
    background-color:rgb(230, 185, 7); 
}
#skip-button {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        font-size: 16px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1003;
        display: none;
    }
        
    </style>
</head>
<body>
<a href="index2.php" id="anasayfa-butonu">Anasayfa</a>
<button id="skip-button">Atla</button>

    
    <div id="video-container">
        <video id="video">
            <source src="gym/tanitim3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    
    <button id="play-button">Hemen Kirala</button>
    <img id="background-image" src="resimler/22.jpg" alt="Rezidans" style="display: none; width: 100%; height: 100%; object-fit: cover; position: fixed; top: 0; left: 0; z-index: -1;">

    
    <div class="kareler-container">
        
        <div class="kare-satir">
            <div class="dikeykare" onclick="openModal()">1</div>
            <div class="boskare solbosluk" onclick="openModal()"></div>
            <div class="kare" onclick="openModal()">3</div>
            <div class="kare" onclick="openModal()">4</div>
            <div class="kare" onclick="openModal()">5</div>
            <div class="kare" onclick="openModal()">6</div>
            <div class="kare" onclick="openModal()">7</div>
            <div class="kare" onclick="openModal()">8</div>
            <div class="kare" onclick="openModal()">9</div>
            <div class="dikeykare solboslukaz" onclick="openModal()" style="position: relative; top: -25px;">10</div>
        </div>

        
        <div class="kare-satir">
            <div class="kare" onclick="openModal()">11</div>
            <div class="yatay-kare yukaridan solbosluk" onclick="openModal()">12</div>
            <div class="kare yukaridan" onclick="openModal()">13</div>
            <div class="kare yukaridan" onclick="openModal()">14</div>
            <div class="kare yukaridan" onclick="openModal()">15</div>
            <div class="kare yukaridan" onclick="openModal()">16</div>
            <div class="kare yukaridan" onclick="openModal()">17</div>
            <div class="kare yukaridan" onclick="openModal()">18</div>
            <div class="kare yukaridan" onclick="openModal()">19</div>
            <div class="kare yukaridan solboslukaz" onclick="openModal()" style="position: relative; top: -30px; position: relative; left: -20px;" >20</div>
        </div>

        
        <div class="kare-satir">
            <div class="kare" onclick="openModal()">21</div>
        </div>

        
        <div class="kare-satir">
            <div class="kare" onclick="openModal()">31</div>
            <div class="yatay-kare yukaridan solbosluk" onclick="openModal()">32</div>
            <div class="kare yukaridan" onclick="openModal()">33</div>
            <div class="kare yukaridan" onclick="openModal()">34</div>
            <div class="kare yukaridan" onclick="openModal()">35</div>
            <div class="kare yukaridan" onclick="openModal()">36</div>
            <div class="yatay-kare yukaridan solboslukaz" onclick="openModal()">37</div>
            <div class="kare yukaridan" onclick="openModal()">38</div>
            <div class="kare yukaridan" onclick="openModal()">39</div>
            <div class="kare yukaridan solboslukaz" onclick="openModal()" style="position: relative; top: -30px; position: relative; left: -30px;">40</div>
        </div>

        
        <div class="kare-satir">
            <div class="kare" onclick="openModal()">41</div>
        </div>

        
        <div class="kare-satir">
            <div class="yatay-kare" onclick="openModal()">41</div>
            <div class="yatay-kare" onclick="openModal()">42</div>
            <div class="kare" onclick="openModal()">43</div>
            <div class="kare" onclick="openModal()">44</div>
            <div class="kare" onclick="openModal()">45</div>
            <div class="kare" onclick="openModal()">46</div>
            <div class="kare" onclick="openModal()">47</div>
            <div class="kare" onclick="openModal()">48</div>
            <div class="kare" onclick="openModal()">49</div>
            <div class="yatay-kare" onclick="openModal()" style="position: relative; top: -30px;">50</div>
        </div>
    </div>

    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Rezervasyon Bilgileri</h2>
            <p>Bu daire için rezervasyon yapmak ister misiniz?</p>
            <button onclick="rezervasyonYap()">Rezervasyon Yap</button>
        </div>
    </div>

    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('video-container').style.display = 'none';
            document.querySelector('.kareler-container').style.display = 'none';
        });

        
        document.getElementById('play-button').addEventListener('click', function() {
            var video = document.getElementById('video');
            video.play();
            document.getElementById('video-container').style.display = 'block';
            document.getElementById('play-button').style.display = 'none';
        });

        document.getElementById('video').addEventListener('ended', function() {
    document.getElementById('video-container').style.display = 'none';
    document.getElementById('background-image').style.display = 'block'; 
    document.querySelector('.kareler-container').style.display = 'flex';
});


       
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

       
        function rezervasyonYap() {
            alert("Rezervasyon başarıyla alındı!");
            closeModal();
        }
        document.getElementById('play-button').addEventListener('click', function() {
        var video = document.getElementById('video');
        document.getElementById('video-container').style.display = 'block';
        document.getElementById('play-button').style.display = 'none';
        document.getElementById('skip-button').style.display = 'block';
        video.play();
    });

    document.getElementById('skip-button').addEventListener('click', function() {
        var video = document.getElementById('video');
        video.pause();
        document.getElementById('video-container').style.display = 'none';
        document.getElementById('background-image').style.display = 'block';
        document.querySelector('.kareler-container').style.display = 'flex';
        this.style.display = 'none';
    });

    document.getElementById('video').addEventListener('ended', function() {
        document.getElementById('video-container').style.display = 'none';
        document.getElementById('background-image').style.display = 'block';
        document.querySelector('.kareler-container').style.display = 'flex';
        document.getElementById('skip-button').style.display = 'none';
    });
    </script>
</body>
</html>