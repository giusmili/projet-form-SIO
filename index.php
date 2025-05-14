
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassRoom - PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h1>
        💻 Compléter le code <kbd>PHP</kbd> suivant
        </h1>
    </header>
    
    <main>
        <ul class="warning">
            <?php
                
                include_once __DIR__.'/controller/controllerForm.php';
                AdminForm::adminForm();
            ?>
        </ul>

        <fieldset>
        
            <legend>
                Remplir les champs 📝
            </legend>
            
            <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <label for="alias">Alias</label>
                <input type="text" id="alias" 
                name="alias" placeholder="Votre alias" 
                aria-required="true" required>

            <label for="login">Login</label>
                <input type="email" id="login" 
                name="login" placeholder="Votre login" 
                aria-required="true" required>
        
            <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true" required>
       

            <label>
                <input type="checkbox" name="admin" value="1"> Vous êtes admin 🔒
            </label>
            <button type="submit">Envoyer</button>
        </form>

    </fieldset>
    </main>
    
  
    <footer>
        <p>
            <a href="https://opensource.org/licenses/MIT" target="_blank">
                <img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="MIT License">
            </a> </p>
    </footer>
    <!-- <pre>
        <?php
            // print_r($_SERVER)
        ?>
    </pre> -->
</body>
</html>