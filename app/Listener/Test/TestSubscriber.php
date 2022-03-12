<?php


namespace App\Listener\Test;


use Swoft\Event\Annotation\Mapping\Subscriber;
use Swoft\Event\EventInterface;
use Swoft\Event\EventSubscriberInterface;

/**
 * Class TestSubscriber
 * @package App\Listener\Test
 * @Subscriber()
 */
class TestSubscriber implements EventSubscriberInterface
{
    const TESTEVENT = "test";
    public static function getSubscribedEvents(): array
    {
        return [
            self::TESTEVENT => "test"
        ];
    }
    public function test(EventInterface $evt){
        echo "命名可以答应的";
        echo json_encode($evt->getParams());
    }
}
