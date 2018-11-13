<?php

namespace Internship\Form;

use Internship\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setRequired(false)
            ->add('title', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('price', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('shortDescription', TextareaType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('fullDescription', TextareaType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('images', FileType::class, array('data_class' => null))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }
}
