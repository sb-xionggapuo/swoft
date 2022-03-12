<?php


namespace App\Listener\Test;


use Swoft\Event\Annotation\Mapping\Listener;
use Swoft\Event\EventHandlerInterface;
use Swoft\Event\EventInterface;

/**
 * Class TestListener
 * @package App\Listener\Test
 * @Listener(name="test")
 */
class TestListener implements EventHandlerInterface
{
    /**
     * Notes:
     * User: 何文杰
     * DateTime: 2022/3/5 0005 9:55
     * @param EventInterface $event
     */
    public function handle(EventInterface $event): void
    {

    }
}
