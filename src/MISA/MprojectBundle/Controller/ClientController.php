<?php

namespace MISA\MprojectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MISA\MprojectBundle\Entity\Client;

class ClientController extends Controller
{
    public function indexAction()
    {
        $clients= $this->getDoctrine()->getManager()
        ->getRepository('MISAMprojectBundle:Client')
        ->findAll();

        return $this->render('MISAMprojectBundle:Client:index.html.twig', array(
            'clients' => $clients
            ));
    }

    public function addAction(Request $request){
        $client = new Client();

        $form = $this->get('form.factory')->createBuilder('form', $client)
            ->add('nom',    'text')
            ->add('Ajouter',   'submit')
            ->getForm()
        ;

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Projet bien enregistré');

            return $this->redirect($this->generateUrl('misa_client_homepage'));
        }
        return $this->render('MISAMprojectBundle:Client:add.html.twig', array(
            'form' => $form->createView()
            ));
    }

     public function editAction($id, Request $request){
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Client")
        ;

        $client = $repository->find($id);

        $form = $this->get('form.factory')->createBuilder('form', $client)
            ->add('nom',    'text')
            ->add('Modifier',   'submit')
            ->getForm()
        ;

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Projet bien modifié');

            return $this->redirect($this->generateUrl('misa_client_view', array('id' => $client->getId())));
        }

        return $this->render('MISAMprojectBundle:Client:edit.html.twig', array(
            'form' => $form->createView()
            ));

    }

     public function viewAction($id){
        // return new Response("id :".$id);
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Client")
        ;

        $client = $repository->findOneBy(array('id'=>$id));

        return $this->render('MISAMprojectBundle:Client:view.html.twig', array(
            'client' => $client
            ));
    }

     public function deleteAction($id, Request $request){

        
        $em = $this->getDoctrine()->getEntityManager();

        $client = $em->getRepository("MISAMprojectBundle:Client")->findOneBy(array('id'=>$id));


        $em->remove($client);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice','Projet bien supprimé');

        return $this->redirectToRoute('misa_project_homepage');
    }
}
