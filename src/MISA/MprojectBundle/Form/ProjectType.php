<?php

namespace MISA\MprojectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            // ->add('client', new ClientType )
            ->add('client', 'entity', array(
                'class' => 'MISAMprojectBundle:Client',
                'property' => 'nom'
                ) )
            ->add('dateLivraison', 'datetime')
            ->add('type', "text")
            ->add('langages', "text")
            ->add('etat', 'choice', array(
                'choices' => array(
                    0 => "n'a pas encore commencé",
                    1 => 'en cours',
                    2 => 'términé'
                ),
                'data' => 0))
            ->add('save', "submit")
            // ->add('assignation')
            // ->add('client')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MISA\MprojectBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'misa_mprojectbundle_project';
    }
}
