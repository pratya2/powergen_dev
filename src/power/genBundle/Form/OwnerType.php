<?php

namespace power\genBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OwnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('registerDate')
            ->add('registerNumber')
            ->add('birthDay')
            ->add('nationality')
            ->add('idCard')
            ->add('districtOfIssue')
            ->add('proviceOfIssue')
            ->add('adressNumber')
            ->add('lane')
            ->add('street')
            ->add('villageNumber')
            ->add('subDistrict')
            ->add('district')
            ->add('province')
            ->add('poscode')
            ->add('telNumber')
            ->add('faxNumber')
            ->add('iscorp')
            ->add('mobilePhone')
            ->add('website')
            ->add('email')
            ->add('ownertype')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'power\genBundle\Entity\Owner'
        ));
    }

    public function getName()
    {
        return 'power_genbundle_ownertype';
    }
}
