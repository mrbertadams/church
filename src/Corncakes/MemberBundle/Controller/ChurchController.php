<?php

namespace Corncakes\MemberBundle\Controller;

use Corncakes\MemberBundle\Entity\Church;
use Corncakes\MemberBundle\Form\ChurchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function createAction(Request $request)
    {
        $entity = new Church();
        $form = $this->createCreateForm($entity);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('church'));
        }

        //$church->setName('Bonanza');
        //$church->setAddress('Barrio Bonanza Turbaco');
        //$church->setPhone('');

        return $this->render('CorncakesMemberBundle:Church:new.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        $entity = new Church();
        $form = $this->createCreateForm($entity);

        return $this->render('CorncakesMemberBundle:Church:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }

    public function createCreateForm(Church $entity)
    {
        $form = $this->createForm(ChurchType::class, $entity, array(
            'action' => $this->generateUrl('church_create'),
            'method' => 'POST',
        ));

        return $form;
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
