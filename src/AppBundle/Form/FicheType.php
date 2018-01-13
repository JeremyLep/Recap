<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use AppBundle\Entity\Groupe;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Ressource;
use AppBundle\Entity\Tag;
use AppBundle\Entity\Commentaire;
use UserBundle\Entity\User;


class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('theme', TextType::class, array('label' => 'Titre du thème'))
            ->add('titre', TextType::class, array('label' => 'Titre de la fiche'))
            ->add('description', TextareaType::class, array('label' => 'Contenu de la fiche'))
            ->add('duree', TextType::class, array('label' => 'Durée estimé de la fiche'))
            ->add('difficulte', TextType::class, array('label' => 'Difficulté de la fiche'))
            ->add('note', TextType::class, array('label' => 'note de la fiche'));
            //->add('auteur', User::class, array('label' => 'note de la fiche'))
            //->add('groupe', Groupe::class, array('label' => 'note de la fiche'))
            //->add('tag', Tag::class, array('label' => 'note de la fiche'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche';
    }


}
