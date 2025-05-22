<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Rezidans Sanal Tur</title>
  <style>
    body { margin: 0; }
    #container { width: 100vw; height: 100vh; }
  </style>
</head>
<body>

<div id="container"></div>

<script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/panolens@0.12.0/build/panolens.min.js"></script>

<script>
  const viewer = new PANOLENS.Viewer({ container: document.querySelector('#container') });

  const disGorunum = new PANOLENS.ImagePanorama('resimler/aynen1.jpeg');
  const girisKat = new PANOLENS.ImagePanorama('resimler/moragym.png');
  const kat1 = new PANOLENS.ImagePanorama('resimler/oda1.jpg');
  const oda1 = new PANOLENS.ImagePanorama('resimler/oda2.jpg');

  const girisHotspot = new PANOLENS.Infospot(600, PANOLENS.DataImage.Arrow);
  girisHotspot.position.set(0, 0, -5000); 
  girisHotspot.addHoverText("Giriş Yap", 40); 
  girisHotspot.addEventListener('click', function () {
    viewer.setPanorama(girisKat); 
  });
  disGorunum.add(girisHotspot); 

  girisKat.link(kat1, new THREE.Vector3(-5000, 0, 0)); //girişşş 
  kat1.link(oda1, new THREE.Vector3(0, 0, -5000));           // geçiş
  oda1.link(kat1, new THREE.Vector3(0, 0, 5000));            // dönüşş

  // Tüm panoları ekle
  viewer.add(disGorunum, girisKat, kat1, oda1);
</script>

</body>
</html>
