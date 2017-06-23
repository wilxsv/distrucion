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
        $builder->add('apiSuministroid','choice',array('label'=>'Tipo de Suministro', 'placeholder' => 'Eliga un suministro','attr' => array('style' => 'width: 100%')))
               // ->add('apiAlmacenid')
                ->add('apiProgramaid','choice',array('label'=>'Programa', 'placeholder' => 'Eliga un programa', 'attr' => array('style' => 'width: 100%')))
                ->add('descripcion', 'text',array('attr' => array('style' => 'width: 100%')))
              //  ->add('fechadistribucion')
                ->add('apiGruposuministroid','choice',array('label'=>'Grupo','placeholder' => 'Eliga un grupo', 'attr' => array('style' => 'width: 100%')))
                ->add('apiSubgruposuministroid','choice',array('label'=>'SubGrupo', 'placeholder' => 'Eliga un subgrupo', 'attr' => array('style' => 'width: 100%')))
                ->add('fechacorte', 'date', array('label'=>'Fecha de corte','format' => 'dd/MM/yyyy','input' => 'datetime','widget' => 'single_text', 'attr' => array('class'=>'form-control', 'style' => 'width: 100%')))
                ->add('mesesCpm', 'integer', array('label'=>'Meses para calcular CPM'))
                ->add('mesesDistribucion','integer', array('label'=>'Meses a asignar'))
                ->add('mesesAdministracion','integer', array('label'=>'Meses a administrar'))
                ->add('mesesSeguridad','integer', array('label'=>'Meses de seguridad'));
               // ->add('fechaCreacion')->add('fechaModificacion')->add('segUsuarioid')->add('catEstadoid');
     
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
