<?php

namespace MISA\MprojectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MISA\MprojectBundle\Entity\Project;
use MISA\MprojectBundle\Entity\Assignation;
use MISA\MprojectBundle\Form\ProjectType;

class MprojectController extends Controller
{
    public function indexAction()
    {
        $em =   $this->getDoctrine()->getEntityManager();
        $projects = $em->getRepository("MISAMprojectBundle:Project")
                        ->findWithClient();


        $projects_to_assign = $em->getRepository("MISAMprojectBundle:Project")->findToAssign();


        $clients = $em->getRepository("MISAMprojectBundle:Client")
                        ->findAll();

        $developers = $em->getRepository("MISAMprojectBundle:Developer")
                        ->findAll();

        // foreach ($developers as $key => $value) {
        //      \Doctrine\Common\Util\Debug::dump(count($value->getAssignations()));
        // }
        // foreach ($projects as $key => $value) {
        //     echo $value->getNom();
        //     \Doctrine\Common\Util\Debug::dump($value);
        // }
        return $this->render('MISAMprojectBundle:Mproject:index.html.twig',
            array(
                'projects' => $projects,
                'projects_to_assign' =>$projects_to_assign,
                'developers' =>$developers,
                'clients' => $clients
                ));
    }

    public function assignProjectAction(Request $request){
        $project_id = $request->request->get('project_id');
        $developer_id = $request->request->get('developer_id');

        $em =   $this->getDoctrine()->getEntityManager();

        $project = $em->getRepository("MISAMprojectBundle:Project")
                        ->find($project_id);
        $developer = $em->getRepository("MISAMprojectBundle:Developer")
                        ->find($developer_id);
        $assignation = new Assignation();

        $assignation->setProject($project);
        $assignation->setDeveloper($developer);

        $em->persist($assignation);

        $developer->addAssignation($assignation);
        $project->setAssignation($assignation);

        $em->persist($developer);
        $em->persist($project);

        $em->flush();
        return $this->render('MISAMprojectBundle:Ajax:assignation.html.twig', array(
            'developer' => $developer
            ));
    }
}
