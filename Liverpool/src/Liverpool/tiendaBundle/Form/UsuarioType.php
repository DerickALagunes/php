<?php

namespace Liverpool\tiendaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UsuarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('apellidopaterno')
                ->add('apellidomaterno')
                ->add('fechanacimiento', DateType::class, array(
                    'widget' => 'single_text',
                    'input' => 'string'))
                ->add('direccion')
                ->add('email')
                ->add('usuario')
                ->add('contrasena')

                ->add('tipo')

                ->add('submit', SubmitType::class, array(
                    'attr' => array('class' => 'btn')))
        ;
    }

//    /**
//     * @param OptionsResolver $resolver
//     */
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'Liverpool\tiendaBundle\Entity\Usuario'
//        ));
//    }
}
