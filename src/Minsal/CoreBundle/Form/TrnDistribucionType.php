<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrnDistribucionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder->add('apiSuministroid')
                ->add('apiAlmacenid')
                ->add('apiProgramaid')
                ->add('descripcion', 'text',array('attr' => array('style' => 'width: 100%')))
                ->add('fechadistribucion')
                ->add('apiGruposuministroid')
                ->add('apiSubgruposuministroid')
                ->add('fechacorte', 'date', 
                        array(
                            'label'=>'Fecha de corte',
                            'format' => 'ddMMyyyy'                            
                            ))
                ->add('mesesCpm')->add('mesesDistribucion')->add('mesesAdministracion')->add('mesesSeguridad')->add('fechaCreacion')->add('fechaModificacion')->add('segUsuarioid')->add('catEstadoid');
     
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\TrnDistribucion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_trndistribucion';
    }


}
