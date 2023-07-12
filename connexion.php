<?php
include("header.php")
?>

<body>
    <header>
        
        <img src="Images/logo_findgames.png" alt="lelogo">
        <h1> Connexion </h1>
        <aside>
        <nav class="nav">
        <ul>
            <li><a href="index.html" class="acc">Acceuil</a></li>
                
            <li><a href="index.html" class="acc">Combat</a></li>
                
            <li><a href="index.html" class="acc">FPS</a></li>
                           
            <li><a href="index.html" class="acc">MMO/JRPG</a></li>
        </ul>
    </nav>
    </aside>
    </header>

    <main>
        <section id="sec1">
           <h2 class="dej">Déjà un compte ?</h2>
                <label for="connexion">Connexion</label>
                <input type="log" name="log" id="log" placeholder="Connexion">
                <label for="mdp">Mot de passe</label>
                <input type="pass" name="pass" id="pass" placeholder="Mot de Passe">

        <h2>Vous n'en avez pas ? </h2>
            <form action="connex.php" method="post" class="form2">
            <fieldset>
                <legend>Créez en un !</legend>
            <table>
                <tr>
                    <label for="name" >Nom :</label>
                    <td><input type="nom" name="nom" id="nom" placeholder="Champ obligatoire*"></td>
                </tr>
                <tr>
                    <label for="pnom" >Prenom :</label>
                    <td><input type="pnom" name="pnom" id="pnom" placeholder="Champ obligatoire*"></td>
                </tr>
                <tr>
                    <label for="email">Email :</label>
                    <td><input type="email" name="email" id="email" placeholder="Champ obligatoire*"></td>
                </tr>
                <tr>
                    <label for="pass">Mot de Pass :</label>
                    <td><input type="pass" name="pass" id="pass" placeholder="Champ obligatoire*"></td>
                </tr>
               </table>
            </fieldset>
        </form>
        </section>
    </main>

    </body>
    <?php
include("footer.php")
?>