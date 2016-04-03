<?php

namespace Allotools\FaqBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieEditType extends CategorieType
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
        return 'allotools_faqbundle_categorie_edit';
    }
}
