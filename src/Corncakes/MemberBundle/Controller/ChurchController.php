<?php

namespace Corncakes\MemberBundle\Controller;

use Corncakes\MemberBundle\Entity\Church;
use Corncakes\MemberBundle\Form\ChurchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ChurchController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

//        $churches = $em->getRepository('CorncakesMemberBundle:Church')->findAll();

        $dql = 'SELECT c FROM CorncakesMemberBundle:Church c';
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('CorncakesMemberBundle:Church:index.html.twig', array(
           'pagination' => $pagination,
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

    private function createCreateForm(Church $entity)
    {
        $form = $this->createForm(ChurchType::class, $entity, array(
            'action' => $this->generateUrl('church_create'),
            'method' => 'POST',
        ));

        return $form;
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

        return $this->render('CorncakesMemberBundle:Church:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CorncakesMemberBundle:Church')->find($id);

        if(!$entity) {
            $messageException = $this->get('translator')->trans('Unable to find Church.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($entity);

        return $this->render('CorncakesMemberBundle:Church:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    private function createEditForm(Church $entity)
    {
        $form = $this->createForm(ChurchType::class, $entity, array(
            'action' => $this->generateUrl('church_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }

    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorncakesMemberBundle:Church')->find($id);

        if(!$entity) {
            $messageException = $this->get('translator')->trans('Unable to find Church.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($entity);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('church_edit', array('id' => $id)));
        }

        return $this->render('CorncakesMemberBundle:Church:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

}
