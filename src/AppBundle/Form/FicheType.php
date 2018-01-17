<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Groupe;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Ressource;
use AppBundle\Entity\Tag;
use AppBundle\Entity\Commentaire;
use UserBundle\Entity\User;
use AppBundle\Repository\TagRepository;


class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $this->tag = $options['tag'];
        $tags = array();
        foreach ($this->tag as $tag) {
            array_push($tags, array($tag->getLabel() => $tag->getId()));
        }

        $builder
            ->add('theme', TextType::class, array(
                'label' => 'Titre du thème'
            ))
            ->add('titre', TextType::class, array(
                'label' => 'Titre de la fiche'
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Contenu de la fiche'
            ))
            ->add('duree', TextType::class, array(
                'label' => 'Durée estimé de la fiche'
            ))
            ->add('difficulte', TextType::class, array(
                'label' => 'Difficulté de la fiche'
            ))
            ->add('note', TextType::class, array(
                'label' => 'note de la fiche'
            ))
            ->add('tag', ChoiceType::class, array(
                'label'    => 'Tag existant associés à la fiche',
                'mapped'   => false,
                'multiple' => true,
                'choices'  => $tags,
                'attr'     => array(
                    'class'    => 'selectTag w-100',
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche',
            'tag' => null,
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
