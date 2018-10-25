<?php

namespace Internship\Form;

use Internship\Entity\Car;
use Internship\Entity\Make;
use Internship\Entity\Model;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;

class CarType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setRequired(false)
            ->add('price', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])
            ->add('year', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])
            ->add('navigation')
            ->add('description')
            ->add('promote')
            ->add('model', EntityType::class, [
                'required' => true,
                'class' => Model::class
            ])
            ->add('make', EntityType::class, [
                'required' => true,
                'class' => Make::class
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }

    /**
     * @return null|string
     */
    public function getBlockPrefix()
    {
        return 'carbundle_car';
    }
}
