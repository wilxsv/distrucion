<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrnDetalleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cpm')->add('cantidadDistribuir')->add('cantidadSugerida')->add('existenciaAlmacenes')->add('existenciaFarmacia')->add('apiEstablecimientoid')->add('verificar')->add('fechaCreacion')->add('fechaModificacion')->add('idTrnValidacion')->add('idTrnAsignacion')->add('idTrnEntregas');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\TrnDetalle'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_trndetalle';
    }


}
