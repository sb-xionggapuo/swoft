<?php


namespace App\Http\Controller;
use App\Common\TestBean;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Bean\BeanFactory;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * Class IndexController
 * @package App\Http\Controller
 * @Controller(prefix="index")
 */
class IndexController
{
    /**
     * @Inject
     * @var TestBean
     */
    public $test;

    /**
     * Notes:
     * User: 何文杰
     * DateTime: 2022/3/4 0004 11:20
     * @RequestMapping(route = "/index")
     */
    public function index(){
        $test = BeanFactory::getBean(TestBean::class);
        $test2 = BeanFactory::getBean(TestBean::class);
        $test->setName("何文杰");
//        var_dump($age);
        var_dump($test->getName());
        var_dump($test2===$test);
        var_dump($this->test->getName());
    }
}
