<?php declare(strict_types=1);


namespace App\Common;
use Swoft\Bean\Annotation\Mapping\Bean;
/**
 * Class TestBean
 * @package App\Common
 * @Bean()
 */
class TestBean
{
    /**
     * @var $name
     */
    private $name;

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName():string{
        return $this->name;
    }

    public function __construct()
    {
        echo "启动了一个进程".PHP_EOL;
    }


}
