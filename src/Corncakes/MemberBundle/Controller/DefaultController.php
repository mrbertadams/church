<?php

namespace Corncakes\MemberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorncakesMemberBundle:Default:index.html.twig');
    }
}
