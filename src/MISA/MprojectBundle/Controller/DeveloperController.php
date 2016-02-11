<?php

namespace MISA\MprojectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MISA\MprojectBundle\Entity\Developer;

class DeveloperController extends Controller
{
    public function indexAction()
    {
        return $this->render('MISAMprojectBundle:Developer:index.html.twig');
    }

    public function addAction(Request $request){
        $developer = new Developer();

        $form = $this->get('form.factory')->createBuilder('form', $developer)
            ->add('nom',    'text')
            ->add('competence',   'text')
            ->add('dateEntree', 'date')
            ->add('Ajouter',   'submit')
            ->getForm()
        ;

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($developer);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Projet bien enregistré');

            return $this->redirect($this->generateUrl('misa_mproject'));
        }
        return $this->render('MISAMprojectBundle:Developer:add.html.twig', array(
            'form' => $form->createView()
            ));
    }

     public function editAction($id, Request $request){
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Developer")
        ;

        $developer = $repository->find($id);

       $form = $this->get('form.factory')->createBuilder('form', $developer)
            ->add('nom',    'text')
            ->add('competence',   'text')
            ->add('dateEntree', 'date')
            ->add('Modifier',   'submit')
            ->getForm()
        ;

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($developer);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Projet bien modifié');

            return $this->redirect($this->generateUrl('misa_project_view', array('id' => $developer->getId())));
        }

        return $this->render('MISAMprojectBundle:Developer:edit.html.twig', array(
            'form' => $form->createView()
            ));

    }

     public function viewAction($id){
        // return new Response("id :".$id);
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Developer")
        ;

        $developer = $repository->findOneBy(array('id'=>$id));

        return $this->render('MISAMprojectBundle:Developer:view.html.twig', array(
            'developer' => $developer
            ));
    }

     public function deleteAction($id, Request $request){

        
        $em = $this->getDoctrine()->getEntityManager();

        $developer = $em->getRepository("MISAMprojectBundle:Developer")->findOneBy(array('id'=>$id));


        $em->remove($developer);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice','Projet bien supprimé');

        return $this->redirectToRoute('misa_mproject');
    }
}
