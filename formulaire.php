<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="form.css" rel="stylesheet" type="text/css" />
                    <title>Formular</title>
</head>

<body>
    <form action="#" class="formulaire">
        <input class="inputform" placeholder="Email" pattern=".*gmail\.com$" type="email" name="" id=""> 
        <input class="inputform" placeholder="Mot de Passe" pattern="[a-z]{4,8}" type="password" required="required" name="" id=""> 
        <input class="inputform" type="submit" value="Connexion"> 
    </form>
    <section class="section-article">
        <article class="article">
            <h1>bienvenue</h1>
            <img src="" alt="rat">
            <p>Lorem ipsum dol</p>
        </article>
        <article class="article">
            <h1>bienvenue</h1>
            <img src="" alt="rat">
            <p>Lorem ipsum dol</p>
        </article>
        <article class="article">
            <h1>bienvenue</h1>
            <img src="" alt="rat">
            <p>Lorem ipsum dol</p>
        </article>
        <article class="article">
            <h1>bienvenue</h1>
            <img src="" alt="rat">
            <p>Lorem ipsum dol</p>
        </article>
    </section>

    <form action="" class="form2">
        <fieldset>
           <legend>formulaire inscription</legend>
           <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="" id="" placeholder="Nom"></td>
            </tr>
            <tr>
                <td>Prenom :</td>
                <td><input type="text" name="" id="" placeholder="Prenom"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="" id="" placeholder="Email@exmpl.com"></td>
            </tr>
            <tr>
                <td>Mot de Pass :</td>
                <td><input type="password" name="" id="" placeholder="Mot de passe"></td>
            </tr>
            <tr>
                <td>Secse :</td>
                <td>Masculin</td>
                <td><input type="radio" name="" id=""></td>
                <td>Feminin</td>
                <td><input type="radio" name="" id=""></td>
            </tr>
            <tr>
                <td><label for="">Photo :</label></td>
                <td><input type="file" name="" id=""></td>
            </tr>
            <tr>
                <td><label for="">Pays :</label></td>
                <td>
                    <select name="" id="">
                        <option value="">France</option>
                        <option value="">Belgique</option>
                        <option value="">Roumanie</option>
                        <option value="">Italie</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for=""> Domaine D'activité : </label></td>
                <td><input type="checkbox" name="" id="">Informatique</td>
                <td><input type="checkbox" name="" id="">Animateur</td>
                <td><input type="checkbox" name="" id="">Comptabilité</td>
                <td><input type="checkbox" name="" id="">Gestion</td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="submit" value="Annuler"></td>
            </tr>
           </table>
        </fieldset>
    </form>
</body>
</html>