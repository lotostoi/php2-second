<?php 
namespace app\controllers;
use app\engine\App;

class ResumeController extends Controller
{
  
    public function actionMain()
    {
        $this->params['technologies'] = App::call()->TechnologiesRepository->getAll();
        echo $this->render('resume/resume', $this->params);
    }
     
}
