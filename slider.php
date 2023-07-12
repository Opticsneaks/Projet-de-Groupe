<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Slider</title>
    <link rel="stylesheet" href="slider.css">
    <script src="slider.js"></script>

</head>

<body>
    <h1>Le beau slider</h1>
    <div id="slider">
        <img src="imgraid.jpg" alt="Raid shadow legende" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>
</body>

</html>