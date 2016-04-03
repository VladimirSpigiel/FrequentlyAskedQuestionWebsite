<?php

namespace Allotools\FaqBundle\Form;

use Allotools\FaqBundle\Form\ServerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServerEditType extends ServerType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'allotools_faqbundle_server_edit';
    }
}
