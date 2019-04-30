<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LandingPage', RadioType::class, [
                'required' => false
            ])
            ->add('GraphicCharter', RadioType::class, [
                'required' => false
            ])
            ->add('Logo', RadioType::class, [
                'required' => false
            ])
            ->add('Model', RadioType::class, [
                'required' => false
            ])
            ->add('Wordpress', RadioType::class, [
                'required' => false
            ])
            ->add('Symfony', RadioType::class, [
                'required' => false
            ])
            ->add('Campagne', RadioType::class, [
                'required' => false
            ])
            ->add('SEO', RadioType::class, [
                'required' => false
            ])
            ->add('Publice', RadioType::class, [
                'required' => false
            ])
            ->add('Atelier', RadioType::class, [
                'required' => false
            ])
            ->add('Logo', CheckboxType::class, [
                'required' => false
            ])
            ->add('Retour', CheckboxType::class, [
                'required' => false
            ])
            ->add('FormatHTML', CheckboxType::class, [
                'required' => false
            ])
            ->add('GraphicCharter', CheckboxType::class, [
                'required' => false
            ])
            ->add('Atelier', CheckboxType::class, [
                'required' => false
            ])
            ->add('Hebergement', CheckboxType::class, [
                'required' => false
            ])
            ->add('Maintenance', CheckboxType::class, [
                'required' => false
            ]);
    }

}