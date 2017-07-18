<?php
namespace Minsal\CoreBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\PropertyAccess\PropertyAccess;


class AddGrupoFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }

    private function addGrupoForm($form, $suministro_id)
    {
        $formOptions = array(
            'placeholder' => 'Selecciona...',
            'class' => 'MinsalCoreBundle:CtlGrupo',
            'property' => 'nombreGrupo',
            'attr' => array(
                'class' => 'Grupo_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($suministro_id) {
                $qb = $repository->createQueryBuilder('m')
                    ->innerJoin('m.suministro', 'c')
                    ->where('c.id = :suministro')
                    ->setParameter('suministro', $suministro_id)
                ;

                return $qb;
            }
        );

        $form->add('apiGruposuministroid', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $Grupo = $accessor->getValue($data, 'apiGruposuministroid');
        $suministro_id = ($data->$Grupo) ? $Grupo->getSuministro()->getId() : null;

        $this->addGrupoForm($form, $suministro_id);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $suministro_id = array_key_exists('suministro', $data) ? $data['suministro'] : null;

        $this->addGrupoForm($form, $suministro_id);
    }
}
?>
