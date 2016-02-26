<?php

namespace Corncakes\MemberBundle\Controller;

use Corncakes\MemberBundle\Entity\Church;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChurchController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $churches = $em->getRepository('CorncakesMemberBundle:Church')->findAll();

        return $this->render('CorncakesMemberBundle:Church:index.html.twig', array(
           'churches' => $churches,
        ));
    }

    public function createAction()
    {
        $church = new Church();

        $church->setName('Bonanza');
        $church->setAddress('Barrio Bonanza Turbaco');
        //$church->setPhone('');

        $em = $this->getDoctrine()->getManager();
        $em->persist($church);

        $em->flush();

        return $this->render('CorncakesMemberBundle:Church:create.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        return $this->render('CorncakesMemberBundle:Church:new.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('CorncakesMemberBundle:Church:show.html.twig', array(
            // ...
        ));
    }

    public function editAction($id)
    {
        return $this->render('CorncakesMemberBundle:Church:edit.html.twig', array(
            // ...
        ));
    }

}
