<?php

namespace power\genBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PowerengineDieselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dieselId')
            ->add('powerengine_diesel')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'power\genBundle\Entity\PowerengineDiesel'
        ));
    }

    public function getName()
    {
        return 'power_genbundle_powerenginedieseltype';
    }
}
