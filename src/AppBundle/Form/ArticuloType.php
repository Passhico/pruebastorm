<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticuloType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'nombre',
            \Symfony\Component\Form\Extension\Core\Type\TextType::class,
            [
                "label" => 'nombre',
                "required" => "required",
                "attr" =>
                    [
                        "class" => " form-control",
                    ],
            ]
        );
        $builder->add(
            'puntos',
            \Symfony\Component\Form\Extension\Core\Type\IntegerType::class,
            [
                "label" => 'puntos',
                "required" => "required",
                "attr" =>
                    [
                        "class" => " form-control",
                    ],
            ]
        );

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Articulo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_articulo';
    }


}
