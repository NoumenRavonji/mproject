<?php

namespace MISA\MprojectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MISA\MprojectBundle\Entity\Project;
use MISA\MprojectBundle\Form\ProjectType;

class ProjectController extends Controller
{
    public function indexAction()
    {
        return $this->render('MISAMprojectBundle:Project:index.html.twig');
    }

    public function addAction(Request $request){
    	$project = new Project();

        $form = $this->get('form.factory')->create(new ProjectType, $project);

    	// $form = $this->get('form.factory')->createBuilder('form', $project)
    	// 	->add('nom',	'text')
    	// 	->add('date_livraison',	'datetime')
    	// 	->add('type',	'text')
    	// 	->add('langages',	'text')
     //        ->add('etat',   'text')
     //        ->add('Ajouter',   'submit')
    	// 	->getForm()
    	// ;

    	$form->handleRequest($request);

    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($project);
    		$em->flush();

    		$request->getSession()->getFlashBag()->add('notice','Projet bien enregistré');

    		return $this->redirect($this->generateUrl('misa_mproject'));
    	}
        $clt = $this->getDoctrine()->getManager()->getRepository("MISAMprojectBundle:Client")->findAll();
        if ( count($clt) !=0){
            return $this->render('MISAMprojectBundle:Project:add.html.twig', array(
            'form' => $form->createView()
            ));
        }else{
            $request->getSession()->getFlashBag()->add('notice',"Ajouter d'abord un client");
            return $this->redirectToRoute('misa_client_add');
        }
    	
    }

     public function editAction($id, Request $request){
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Project")
        ;

        $project = $repository->find($id);
        $form = $this->get('form.factory')->create(new ProjectType, $project);


     //    $form = $this->get('form.factory')->createBuilder('form', $project)
    	// 	->add('nom',	'text')
    	// 	->add('date_livraison',	'datetime')
    	// 	->add('type',	'text')
    	// 	->add('langages',	'text')
     //        ->add('etat',   'text')
     //        ->add('Modifier',   'submit')
    	// 	->getForm()
    	// ;

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice','Projet bien modifié');

            return $this->redirect($this->generateUrl('misa_project_view', array('id' => $project->getId())));
        }

        return $this->render('MISAMprojectBundle:Project:edit.html.twig', array(
            'form' => $form->createView()
            ));

    }

     public function viewAction($id){
        // return new Response("id :".$id);
        $repository = $this->getDoctrine()->getManager()
        ->getRepository("MISAMprojectBundle:Project")
        ;

        $project = $repository->findOneBy(array('id'=>$id));

        return $this->render('MISAMprojectBundle:Project:view.html.twig', array(
            'project' => $project
            ));
    }

     public function deleteAction($id, Request $request){

        
        $em = $this->getDoctrine()->getEntityManager();

        $project = $em->getRepository("MISAMprojectBundle:Project")->findOneBy(array('id'=>$id));


        $em->remove($project);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice','Projet bien supprimé');

        return $this->redirectToRoute('misa_mproject');
    }
}
