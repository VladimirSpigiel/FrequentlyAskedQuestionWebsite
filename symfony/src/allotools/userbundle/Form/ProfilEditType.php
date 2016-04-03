<?php

namespace Allotools\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

class ProfilEditType extends ProfilType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
        parent::buildForm($builder, $options);
    }

    public function getName()
    {
        return 'allotools_userbundle_profil_edit';
    }
} 