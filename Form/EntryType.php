<?php

namespace Fab\FabGuestbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EntryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('topic')
            ->add('message')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function getName()
    {
        return 'fab_fabguestbookbundle_entrytype';
    }
}
