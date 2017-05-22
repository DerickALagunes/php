<?php

namespace Liverpool\tiendaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class CategoriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('iddepartamento', EntityType::class , array(
                'class' => 'LiverpooltiendaBundle:Departamento',
                'property' => 'nombre',
                'expanded' => false,
                'multiple' => false,
                'label' => 'seleccione departamento',
            ))
        ;
    }
    

}
