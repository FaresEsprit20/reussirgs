<?php

namespace GsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\AppBundle;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Default/index.html.twig');
    }


    public function additionParTrouAction()
    {
        return $this->render('@Gs/Default/additiontrou.html.twig');
    }

    public function comparerpartroisAction()
    {
        return $this->render('@Gs/Default/comparerpar3.html.twig');
    }

    public function moinsplusAction()
    {
        return $this->render('@Gs/Default/moinsplus.html.twig');
    }

    public function soustractionAction()
    {
        return $this->render('@Gs/Default/soustraction.html.twig');
    }

    public function compterdeuxAction()
    {
        return $this->render('@Gs/Default/compterdeux.html.twig');
    }

}


