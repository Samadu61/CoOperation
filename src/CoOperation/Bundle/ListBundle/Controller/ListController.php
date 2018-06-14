<?php

namespace CoOperation\Bundle\ListBundle\Controller;

use CoOperation\Bundle\ListBundle\Entity\UserList;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ListController extends Controller
{
    public function indexAction(): Response
    {
        return $this->render('@CoOperationList/List/index.html.twig');
    }

    public function newAction(Request $request): Response
    {
      $list = new UserList();

    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $list);

    $formBuilder
      ->add('name',      TextareaType::class)
    //  ->add('products', )
      ->add('save',      SubmitType::class)
    ;

    $form = $formBuilder->getForm();
    if ($request->isMethod('POST')) {
  /*    $form->handleRequest($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($list);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Liste bien enregistrée.');

        return $this->redirectToRoute('list_view', array('id' => $list->getId())); */
      }


    return $this->render('@CoOperationList/List/newlist.html.twig', array(
      'form' => $form->createView(),
    ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getRepository();
        $list = $em->find($id);

        return $this->render('@CoOperationList/List/newlist.html.twig', array(
              'list' => $list,
        ));
    }
}
