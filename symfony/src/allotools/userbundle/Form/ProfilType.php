<?php

namespace Allotools\UserBundle\Form;

use Allotools\UserBundle\Entity\Profil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('description');

        $builder->add('role', 'choice', array(
            'multiple' => true,
            'choices' => Profil::getRolesNames(),
            'label' => 'Roles',
            'required' => true
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Allotools\UserBundle\Entity\Profil'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'allotools_userbundle_profil';
    }
}
