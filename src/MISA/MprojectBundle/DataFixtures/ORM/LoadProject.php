<?php


namespace MISA\MprojectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MISA\MprojectBundle\Entity\Project;

class LoadProject implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    // $project = array[
    //   array[
    //     "name" => "",
    //     "date_livraison" => "",
    //     "type" => "",
    //     "langage"
    //   ],
    //   'SIG',
    //   'Node.js Video App',
    //   'Design Telma Gap',
    //   'App Android',
    //   'DagoVideo'
    // ];


    foreach ($names as $name) {
      // On crée la catégorie
      $category = new Category();
      $category->setName($name);

      // On la persiste
      $manager->persist($category);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}