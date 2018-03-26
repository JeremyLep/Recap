<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('username', null, array(
                'translation_domain' => 'FOSUserBundle'
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array(
                    'label' => 'Mot de passe*',
                    'attr' => array('class' => 'form-control'),
                ),
                'second_options' => array(
                    'label' => 'Confirmation mot de passe*',
                    'attr' => array('class' => 'form-control'),
                ),
                'invalid_message' => 'Les mots de passe ne correspondent pas.',    
            ))
            ->add('nom', TextType::class, array(
                'required' => false
            ))
            ->add('prenom', TextType::class, array(
                'required' => false
            ))
            ->add('avatar', FileType::class, array(
                'required' => false
            ))
            ->add('age', IntegerType::class, array(
                'required' => false
            ))
            ->add('ville', TextType::class, array(
                'required' => false
            ))
            ->add('submit', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
            'csrf_token_id' => 'registration',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }
}
