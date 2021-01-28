<?php 
namespace app\controllers;

class ResumeController extends Controller
{
  
    public function actionMain()
    {
        echo $this->render('resume/resume', []);
    }
     
}
