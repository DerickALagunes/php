<?php

namespace Liverpool\tiendaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class EmpleadoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('iddepartamento', EntityType::class, array(
                    'class' => 'LiverpooltiendaBundle:Departamento',
                    'property' => 'nombre',
                    'expanded' => false,
                    'multiple' => false,
                    'label' => 'seleccione Departamento',
                ))
                ->add('idpersona', EntityType::class, array(
                    'class' => 'LiverpooltiendaBundle:Tipouser',                 
                    'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                            ->where("p.tipo = 'empleado'");
                    },                            
                    'property' => 'idPersona.nombre',
                    'expanded' => false,
                    'multiple' => false,
                    'label' => 'seleccione Empleado',
                ))
        ;
    }



}
