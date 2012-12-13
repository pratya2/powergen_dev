<?php

namespace power\genBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstablishmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('lane')
            ->add('street')
            ->add('village')
            ->add('subdistrict')
            ->add('district')
            ->add('province')
            ->add('region')
            ->add('poscode')
            ->add('telNumber')
            ->add('faxNumber')
            ->add('lat')
            ->add('lng')
            ->add('location')
            ->add('idnumber')
            ->add('owner')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'power\genBundle\Entity\Establishment'
        ));
    }

    public function getName()
    {
        return 'power_genbundle_establishmenttype';
    }
}
