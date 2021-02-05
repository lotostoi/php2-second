<?php 
namespace app\engine;
require_once '../vendor/autoload.php';
use app\interfaces\Irender;
use app\config\Config;

class TwigRender implements Irender
 {
    private $twig = null; 

    public function __construct()
    {
      $loader = new \Twig\Loader\FilesystemLoader('../twigViews');
      $this->twig = new \Twig\Environment($loader, [
         'cache' => '../cache',
         'debug' => true
     ]);
    }
    public function renderTemplate($template, $params = [])
    {
      $templatePath = $template . ".twig";
      return $this->twig->render($templatePath, $params);
    }
}