<?php

namespace Internship\Form;

use Internship\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('email', EmailType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('subject', TextType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])

            ->add('message', TextareaType::class, [
                'required' => true,
                'constraints' =>
                    [
                        new NotBlank()
                    ]
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Contact::class,
        ));
    }
}
