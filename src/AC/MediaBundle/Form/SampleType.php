<?php

namespace AC\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SampleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('field1','text', [
                'attr' => [
                    'class' => 'sr'
                    ]])
            ->add('field2','text', [
                'attr' => [
                    'class' => 'sr2'
                    ]])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AC\MediaBundle\Entity\Sample'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ac_mediabundle_sample';
    }
}
