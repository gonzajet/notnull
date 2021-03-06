<?php

namespace ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ContactoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', TextType::class, array('label'=> 'Nombre', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('apellido', TextType::class, array('label' =>'Apellido','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('email', TextType::class, array('label'=> 'EmaIl','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('createdAt')
                ->add('subject', TextType::class, array('label'=> 'Subject','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('mensaje', TextareaType::class, array('label'=> 'Mensaje','attr' => array('class' => 'form-control')))
                ->add('save',SubmitType::class, array('label' => ' Confirmar y enviar mensaje'))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    #de donde vienen los datos ----
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProyectoBundle\Entity\Contacto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'contacto';
    }


}
