<?php
/**
 * Created by PhpStorm.
 * User: fede
 * Date: 04/11/17
 * Time: 16:31
 */

namespace ProyectoBundle\Form;


class ReservaType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_auto')
            ->add('id_lugar')
            ->add('fecha_desde')
            ->add('fecha_hasta')
        ;
    }

    /**
     * {@inheritdoc}
     */
    #de donde vienen los datos ----
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProyectoBundle\Entity\Reserva'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reserva';
    }
}