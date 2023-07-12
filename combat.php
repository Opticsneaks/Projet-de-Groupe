<?php 
include("header.php")
?>
<body>
    <header class="p-3">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
      
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="acceuil.html" class="nav-link px-2 text-secondary">Acceuil</a></li>
              <li><a href="mmojrpg.html" class="nav-link px-2 text-white">MMORPG</a></li>
              <li><a href="fps.html" class="nav-link px-2 text-white">FPS</a></li>
            </ul>
      
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark " placeholder="Cherche ton jeu..." aria-label="Search">
            </form>
      
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Connexion</button>
              <button type="button" class="btn-2 "><a href="formulaire.html">Créer un compte</a></button>
            </div>
          </div>
        </div>
      </header>
      <main>
        <div class="logo1"><img class="logo" src="logo_findgames.png" alt=""></div>
        <h2>Les Jeux du moment :</h2>
        <div id="slider">
            <article>
                <a href="#"><img class="art" src="téléchargement (3).jpg" alt=""></a>
            </article>
            <article>
                <a href="#"><img class="art" src="téléchargement (4).jpg" alt=""></a>
            </article>
            <article>
                <a href="#"><img class="art" src="téléchargement (5).jpg" alt=""></a>
            </article>
            <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
          </div>
        <h2>A Découvrir :</h2>
        <div id="slider">
         
            <article>
                <a href="#"><img class="art" src="téléchargement (6).jpg" alt=""></a>
            </article>
            <article>
                <a href="#"><img class="art" src="téléchargement.jpg" alt=""></a>
            </article>
            <article>
              <a href="#"><img class="art" src="téléchargement (2).jpg" alt=""></a>
            </article>
            <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
          </div>
      </main>
      <footer>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Esse harum assumenda consectetur repellat a commodi? Officia iure, esse tenetur laudantium,
          distinctio maiores reprehenderit quis et nobis ea excepturi recusandae quam ratione doloribus.
          Voluptatum enim maiores doloremque explicabo quis. Sed quis provident explicabo at doloremque
          maxime suscipit consequatur iusto ipsum sequi! Eligendi quo optio ab veritatis. Voluptatum tempore
          sed consequuntur, provident, eveniet eligendi illo quia, esse qui possimus magni error non.
          Impedit quas minima blanditiis nisi consequuntur ullam deserunt, quae odio quod incidunt, earum
          beatae laudantium possimus maiores quisquam, molestiae suscipit.
        </p>
      </footer>
</body>
<script async>
  const slide = ["téléchargement (6).jpg", "téléchargement.jpg", "téléchargement (2).jpg",];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
</script>
<?php 
include("footer.php")
?>
