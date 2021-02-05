<?php

namespace app\controllers;


use app\interfaces\Irender;
use app\engine\Render;

class Controller extends ApiController
{
    private $defaultLayout = 'main';
    private $useLayout = true;
    protected $renderer;

    public function __construct(Irender $renderer)
    {
        parent::__construct();
        $this->defaultAction = 'main';
        $this->renderer = $renderer;
    }


    public function render($template, $params = [])
    {
  /*       if ($this->useLayout) {
            return $this->renderTemplate(
                "layouts/{$this->defaultLayout}",
                [
                    'header' => $this->renderTemplate('header', $params),
                    'content' => $this->renderTemplate($template, $params),
                    'footer' => $this->renderTemplate('footer/footer', $params),
                ]
            );
        } else {
            return $this->renderTemplate($template, $params);
        } */
        return $this->renderTemplate($template, $params);
    }

    public function renderTemplate($template, $params = [])
    {    
       return $this->renderer->renderTemplate($template, $params);
    }
}
