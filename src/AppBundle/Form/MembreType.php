<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MembreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('post', CheckboxType::class, array(
                'mapped' => false, 
                'required' => false
            ))
            ->add('edit', CheckboxType::class, array(
                'mapped' => false,
                'required' => false
            ))
            ->add('ressource', CheckboxType::class, array(
                'mapped' => false,
                'required' => false
            ))
            ->add('invite', CheckboxType::class, array(
                'mapped' => false,
                'required' => false
            ))
            ->add('id', HiddenType::class, array(
                'required' => true,
                'mapped'   => false
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_membre';
    }


}
