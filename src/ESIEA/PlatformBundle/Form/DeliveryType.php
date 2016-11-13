<?php
// src/ESIEA/PlatformBundle/Form/DeliveryType.php

namespace ESIEA\PlatformBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    
    $builder
      ->add('fullname',     TextType::class)
      ->add('adressone',    TextType::class) 
      ->add('adresstwo',   TextType::class)
      ->add('city',     TextType::class)
      ->add('zip',      TextType::class)
      ->add('telephone',      TextType::class)
      ->add('save',      SubmitType::class)

      

    ;

    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,
      function(FormEvent $event) {
        $delivery = $event->getData();

        if (null === $delivery) {
          return;
        }
      }
    );
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'ESIEA\PlatformBundle\Entity\Delivery'
    ));
  }
}