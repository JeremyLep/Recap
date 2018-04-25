<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Range;

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
            $tags[] = array($tag->getLabel() => $tag->getId());
        }

        $builder
            ->add('theme', TextType::class, array(
                'label' => 'Titre du thème',
            ))
            ->add('titre', TextType::class, array(
                'label' => 'Titre de la fiche',
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Contenu de la fiche',
            ))
            ->add('duree', TextType::class, array(
                'label' => 'Durée estimé de la fiche',
            ))
            ->add('difficulte', TextType::class, array(
                'label' => 'Difficulté de la fiche',
            ))
            ->add('tag', ChoiceType::class, array(
                'label'    => 'Tag existant associés à la fiche',
                'required' => false,
                'mapped'   => false,
                'multiple' => true,
                'choices'  => $tags,
                'attr'     => array(
                    'class' => 'selectTag w-100',
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
