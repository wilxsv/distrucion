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
    {/*  ->add('apiAlmacenid')->add('descripcion')->add('fechadistribucion')->add('fechacorte')->add('mesesCpm')
      ->add('mesesDistribucion')->add('mesesAdministracion')->add('mesesSeguridad')->add('fechaCreacion')
      ->add('fechaModificaion')->add('segUsuarioid')->add('catEstadosid')->add('catProgramaid')->add('idPrioridad')
      ->add('catSuministroid')->add('apiGruposuministroid')->add('idCatEstablecimiento')->add('catProductoid');*/
        $builder
        ->add('segUsuarioid')
        ->add('descripcion', 'text',array('attr' => array('class'=>'form-control','style' => 'width: 100%', 'name'=>'descripcion')))
        ->add('fechacorte', 'date', array('label'=>'Fecha de corte','format' => 'dd/MM/yyyy','input' => 'datetime','widget' => 'single_text', 'required' => false,
        'attr' => array('class'=>'form-control', 'style' => 'width: 100%', 'placeholder'=>'Mes/Año')))
        ->add('mesesCpm', 'integer', array('label'=>'Meses para calcular CPM', 'attr' => array('class'=>'form-control','style' => 'width: 100%')))
        ->add('mesesDistribucion','integer', array('label'=>'Meses a asignar','attr' => array('class'=>'form-control','style' => 'width: 100%')))
        ->add('mesesAdministracion','integer', array('label'=>'Meses a administrar','attr' => array('class'=>'form-control','style' => 'width: 100%')))
        ->add('mesesSeguridad','integer', array('label'=>'Meses de seguridad','attr' => array('class'=>'form-control','style' => 'width: 100%')))
        ->add('idPrioridad','entity',array(
          'class' => 'MinsalCoreBundle:CatPrioridad',
            'label'  => 'Prioridad de entrega :',
          'attr' => array('class' => 'form-control select2')
        ))

->add('porPrograma','checkbox', array('label'=>'Realizar por Programa:',
'attr'=>array('class'=>'js-switch')))
->add('porEstadistica','checkbox', array('label'=>'Utiliza estadísticas:',
'attr'=>array('class'=>'js-switch')))
        ->add('catProductoid','entity',array(
          'class' => 'MinsalCoreBundle:CatProducto',
          'query_builder' => function(\Doctrine\ORM\EntityRepository $irep){
            return $irep->createQueryBuilder('i')->orderBy('i.codigoSinab','ASC')->setMaxResults('600');//sino muere!!
          },
          'multiple' => true,  'attr' => array('class'=>'selector_multiple', 'style' => 'width: 100%')
          ))



            
                ->add('idCatEstablecimiento','entity',array(
                  'class' => 'MinsalCoreBundle:CatEstablecimiento',
                  'query_builder' => function(\Doctrine\ORM\EntityRepository $irep){
                    return $irep->createQueryBuilder('i')->orderBy('i.nombre','ASC')->setMaxResults('600');//sino muere!!
                  },
                  'multiple' => true, 'attr' => array('class'=>'selector_multiple2', 'style' => 'width: 100%')
                ));
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
