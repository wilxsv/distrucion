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
        $builder->add('apiAlmacenid')
                ->add('descripcion', 'text',array('attr' => array('style' => 'width: 100%')))
                ->add('fechadistribucion')
                ->add('fechacorte', 'date', array('label'=>'Fecha de corte','format' => 'dd/MM/yyyy','input' => 'datetime','widget' => 'single_text', 
                    'attr' => array('class'=>'form-control', 'style' => 'width: 100%', 'placeholder'=>'Mes/Año')))
                ->add('mesesCpm')
                ->add('mesesDistribucion')
                ->add('mesesAdministracion')
                ->add('mesesSeguridad')
                ->add('fechaCreacion')
                ->add('fechaModificacion')
                ->add('catEstadoid')
                ->add('segUsuarioid')
                ->add('apiGruposuministroid')
                ->add('catSuministroid','entity',array(
                    'class'=> 'MinsalCoreBundle:CatSuministro',
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $rep) {
                     return $rep->createQueryBuilder('q')->orderBy('q.nombreSuministro', 'ASC'); 
                    },
                    'label'=>'Tipo de Suministro', 'placeholder' => 'Eliga un tipo de suministro', 'attr' => array('style' => 'width: 100%')
                ))
                ->add('catProgramaid','entity',array(
                    'class'=> 'MinsalCoreBundle:CatProgramas',
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $er) {
                     return $er->createQueryBuilder('q')->orderBy('q.nombre', 'ASC'); 
                    },
                    'label'=>'Programa', 'placeholder' => 'Eliga un programa', 'attr' => array('style' => 'width: 100%')))
                ->add('ctlInsumo')
                ->add('apiEstablecimientoid');
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
