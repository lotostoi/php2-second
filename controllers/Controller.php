<?php

namespace app\controllers;

use app\config\Config;

class Controller extends ApiController
{
    private $defaultLayout = 'main';
    private $useLayout = true;


    public function __construct()
    {
        parent::__construct();
        $this->defaultAction = 'main';
    }


    public function render($template, $params = [])
    {
        if ($this->useLayout) {
            return $this->renderTemlate(
                "layouts/{$this->defaultLayout}",
                [
                    'header' => $this->renderTemlate('header', $params),
                    'content' => $this->renderTemlate($template, $params),
                    'footer' => $this->renderTemlate('footer/footer', $params),
                ]
            );
        } else {
            return $this->renderTemlate($template, $params);
        }
    }

    public function renderTemlate($template, $params = [])
    {
        extract($params);
        ob_start();
        $templatePath =  (new Config)->pathes['templates'] . $template . ".php";
        if (file_exists($templatePath)) {
            include $templatePath;
        }
    }
}
