<?php
namespace App;

class Autoloader {
    static function register() {
        spl_autoload_register([__CLASS__, 'autoload']); 
    } 

    // name of function is the same as mentioned above
    static function autoload($class) {
        //récupère dans clase la totalité du namespace de la classe concernée  
        //echo $class . "<br>";

        // Ex: App\Controller\Form --> on va retirer le App\, parce que ça fait pas partie du chemin)
        // __NAMESPACE__ prendre le namespace dont on est. | Mettre deux \\ parce que '\ echaperait l'autre '  
        $class = str_replace( __NAMESPACE__ . '\\', '', $class);
        //echo $class . "<br>";
        
        //maintenant le chemin est (ex:) Crontroller\From et on doit changer le \ pour / parce que les chemins sont comme ça
        $class = str_replace('\\', '/', $class);
        //echo $class . "<br>";

        // __DIR__ prandre le chemin d'avant et après on doit ajouter .php à la fin pour avoir le chemin complet
        //echo __DIR__ . '/' . $class . '.class.php';
        $file = __DIR__ . '/' . $class . '.class.php';

        // verifier si le fichier existe
        if(file_exists($file)) {
            require_once $file;
        }
    }
}
