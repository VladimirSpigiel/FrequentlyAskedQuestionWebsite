<?php

namespace Allotools\FaqBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lib')
            ->add('host')
            ->add('user')
            ->add('pwd')
            ->add('dbname')
            ->add('tbname')
            ->add('type_bdd')
            ->add('type_service')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Allotools\FaqBundle\Entity\Server'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'allotools_faqbundle_server';
    }
}
