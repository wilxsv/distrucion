<?php
namespace Minsal\CoreBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;

class AddSuministroFieldSubscriber implements EventSubscriberInterface
{
   public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }

    private function addSuministroForm($form, $Suministro = null)
    {
        $formOptions = array(
            'class' => 'MinsalCoreBundle:CatSuministro',
            'placeholder' => 'Selecciona...',
            'mapped' => false,
            'attr' => array(
                'class' => 'Suministro_selector',
            )
        );

        if ($Suministro) {
            $formOptions['data'] = $Suministro;
        }

        $form->add('catSuministroid', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $grupo = $accessor->getValue($data, 'apiGruposuministroid');
        $Suministro = ($grupo) ? $grupo->getSuministro() : null;

        $this->addSuministroForm($form, $Suministro);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $this->addSuministroForm($form);
    }
}
?>
