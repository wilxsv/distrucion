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
        $builder->add('apiAlmacenid')->add('apiProgramaid')->add('descripcion')->add('fechadistribucion')->add('fechacorte')->add('mesesCpm')->add('mesesDistribucion')->add('mesesAdministracion')->add('mesesSeguridad')->add('fechaCreacion')->add('fechaModificacion')->add('catEstadoid')->add('segUsuarioid')->add('apiSuministroid')->add('apiGruposuministroid')->add('ctlInsumo');
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
