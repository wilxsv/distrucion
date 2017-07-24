<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrnAsignacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('apiAlmacenid')->add('descripcion')->add('fechadistribucion')
              ->add('fechacorte')->add('mesesCpm')->add('mesesDistribucion')
              ->add('mesesAdministracion')->add('mesesSeguridad')->add('fechaCreacion')
              ->add('fechaModificaion')->add('prioridad')->add('segUsuarioid')
              ->add('catEstadosid')->add('catProgramaid')->add('catSuministroid')
              ->add('apiGruposuministroid')->add('idCatEstablecimiento');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\CoreBundle\Entity\TrnAsignacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'minsal_corebundle_trnasignacion';
    }


}
