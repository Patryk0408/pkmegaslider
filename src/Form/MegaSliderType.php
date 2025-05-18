<?php 

namespace PKMegaSlider\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MegaSliderType extends AbstractType 
{
  public function buildForm(FormBuilderInterface $builder, array $options) 
  {
    $builder 
      ->add('name', TextType::class, [
        'attr' => [
          "placeholder" => "The name",
          "required" => true
        ]
      ])
      ->add('description', TextType::class, [
        'attr' => [
          "placeholder" => "Description on slide"
        ]
      ])
      ->add('imageDesktop', TextType::class, [
        'label' => "Desktop image",
        'attr' => [
          "placeholder" => "Image for desktop",
          "required" => true
        ]
      ])
      ->add('imageMobile', TextType::class, [
        'label' => "Mobile image",
        'attr' => [
          "placeholder" => "Image for mobile"
        ]
      ])
      ->add('link', TextType::class, [
        'attr' => [
          "placeholder" => "Link to the slide"
        ]
      ]);
  }
}