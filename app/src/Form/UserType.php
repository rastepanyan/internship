<?php

namespace Internship\Form;

use Internship\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setRequired(false)
            ->add('firstName', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('lastName', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('address', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('postCode', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('city', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('countryCode', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('username', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('email', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}
