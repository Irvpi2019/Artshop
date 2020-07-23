<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ProdName')
            ->add('description')
            ->add('image')
            //->add('addAt')
            ->add('size')
            ->add('quantity')
            ->add('priceArtist')
            //->add('priceSite')
            //->add('views')
            //->add('likes')
            ->add('categoryId')
            //->add('artistId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
