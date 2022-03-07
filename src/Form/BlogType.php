<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('image',FileType::class,['mapped' => false,
                'attr' => array(
                    'accept' => 'image/jpeg,image/png',
                    'class'=>'form-control-file'
                ),

            ])
            /*->add('video',FileType::class,['mapped' => false,
                'attr' => array(
                    'accept' => 'image/jpeg,image/png',
                    'class'=>'form-control-file'
                ),

            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
