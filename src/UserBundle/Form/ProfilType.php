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
use Symfony\Component\Validator\Constraints\Email;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'required'    => true,
                'constraints' => new Email(array('message' => 'Vous devez entrer un email valide.'))
            ))
            ->add('username', null, array(
                'translation_domain' => 'FOSUserBundle',
                'required' => true
            ))
            ->add('nom', TextType::class, array(
                'required' => false
            ))
            ->add('prenom', TextType::class, array(
                'required' => false
            ))
            ->add('avatar', FileType::class, array(
                'required'   => false,
                'data_class' => null,
            ))
            ->add('tel', TextType::class, array(
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