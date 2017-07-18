<?php

namespace Minsal\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Minsal\CoreBundle\Form\EventListener\AddGrupoFieldSubscriber;
use Minsal\CoreBundle\Form\EventListener\AddSuministroFieldSubscriber;

class TrnDistribucionType extends AbstractType
{
  /**
  * {@inheritdoc}
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('apiAlmacenid')
    ->add('descripcion', 'text',array('attr' => array('class'=>'form-control','style' => 'width: 100%')))
    ->add('fechadistribucion')
    ->add('fechacorte', 'date', array('label'=>'Fecha de corte','format' => 'dd/MM/yyyy','input' => 'datetime','widget' => 'single_text',
    'attr' => array('class'=>'form-control', 'style' => 'width: 100%', 'placeholder'=>'Mes/Año')))
    ->add('mesesCpm', 'integer', array('label'=>'Meses para calcular CPM', 'attr' => array('class'=>'form-control','style' => 'width: 100%')))
    ->add('mesesDistribucion','integer', array('label'=>'Meses a asignar','attr' => array('class'=>'form-control','style' => 'width: 100%')))
    ->add('mesesAdministracion','integer', array('label'=>'Meses a administrar','attr' => array('class'=>'form-control','style' => 'width: 100%')))
    ->add('mesesSeguridad','integer', array('label'=>'Meses de seguridad','attr' => array('class'=>'form-control','style' => 'width: 100%')))
    ->add('fechaCreacion')
    ->add('fechaModificacion')
    ->add('catEstadoid')
    ->add('segUsuarioid')
    ->add('ctlInsumo','entity',array(
      'class' => 'MinsalCoreBundle:CatInsumo',
      'query_builder' => function(\Doctrine\ORM\EntityRepository $irep){
        return $irep->createQueryBuilder('i')->orderBy('i.nombreLargoInsumo','ASC')->setMaxResults('600');//sino muere!!
      },
      'multiple' => true,  'attr' => array('class'=>'selector_multiple', 'style' => 'width: 100%')
      ))
      ->addEventSubscriber(new AddSuministroFieldSubscriber())
      ->addEventSubscriber(new AddGrupoFieldSubscriber());
      
      /*
      ->add('apiGruposuministroid', 'entity', array(
        'class' => 'MinsalCoreBundle:CtlGrupo',
        'query_builder' => function(\Doctrine\ORM\EntityRepository $grep){
          return $grep->createQueryBuilder('g')->orderBy('g.nombreGrupo','ASC');
        },
        'label'=>'Grupo', 'placeholder' => 'Eliga un grupo de suministro', 'attr' => array('class'=>'form-control','style' => 'width: 100%')
        ))
        ->add('catSuministroid','entity',array(
          'class'=> 'MinsalCoreBundle:CatSuministro',
          'query_builder' => function(\Doctrine\ORM\EntityRepository $srep) {
            return $srep->createQueryBuilder('s')->orderBy('s.nombreSuministro', 'ASC');
          },
          'label'=>'Tipo de Suministro', 'placeholder' => 'Eliga un tipo de suministro', 'attr' => array('class'=>'form-control','style' => 'width: 100%')
          ))*/
          ->add('catProgramaid','entity',array(
            'class'=> 'MinsalCoreBundle:CatProgramas',
            'query_builder' => function(\Doctrine\ORM\EntityRepository $prep) {
              return $prep->createQueryBuilder('p')->orderBy('p.nombre', 'ASC');
            },
            'label'=>'Programa', 'placeholder' => 'Eliga un programa', 'attr' => array('class'=>'form-control','style' => 'width: 100%')))

            ->add('apiEstablecimientoid','entity',array(
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
