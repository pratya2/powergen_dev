<?php

namespace power\genBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('powerhouseId')
            ->add('transactionDate')
            ->add('businessType')
            ->add('transactionCompleteDate')
            ->add('transactionVerifyDate')
            ->add('iscertificate')
            ->add('isproxy')
            ->add('isidcard')
            ->add('ismap')
            ->add('ischartlocation')
            ->add('ischartcapacity')
            ->add('ispower')
            ->add('islatlong')
            ->add('islicense')
            ->add('establishment')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'power\genBundle\Entity\Transaction'
        ));
    }

    public function getName()
    {
        return 'power_genbundle_transactiontype';
    }
}
