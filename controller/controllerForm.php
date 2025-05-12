<?php
    # On vérifie si le formulaire est soumis
class AdminForm{
    static function adminForm(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # Si la checkbox est cochée, et les autres champs sont remplies : true sinon, false
            $alias = isset($_POST["alias"]) ? strip_tags($_POST["alias"]) : false;
            $login = isset($_POST['login']) ? $_POST['login'] : false;
            $password = isset($_POST['password']) ? str_repeat("#", strlen($_POST['password'])) : false;
            $admin = isset($_POST['admin']) ? 1 : 0;
    
            print "<li>✅ Valeur à enregistrer en base : " . $admin."</li>
            <li>✅ Login : ".$login."</li>
            <li>✅ Password : ".$password."</li>
            <li>✅ $alias</li>";
         }
    }
}
