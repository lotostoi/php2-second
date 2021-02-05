<?php 
namespace app\engine;
use app\interfaces\Irender;
use app\config\Config;

class Render implements Irender
 {
    public function renderTemplate($template, $params = [])
    {   
      
        extract($params);
        ob_start();
        $templatePath =  (new Config)->pathes['templates'] . $template . ".php";
        if (file_exists($templatePath)) {
            include $templatePath;
        }
    
        return ob_get_clean();
    }
}