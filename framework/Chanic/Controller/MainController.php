<?php
/**
 * Created by PhpStorm.
 * User: felito
 * Date: 3/10/2016
 * Time: 11:48 AM
 */

namespace Chanic\Controller;


use Symfony\Component\DependencyInjection\Container;

class MainController {
    /**
     * @var Container $sc
     */
    protected $sc;

    /**
     * @return Container
     */
    public function getSc()
    {
        return $this->sc;
    }

    /**
     * @param Container $sc
     */
    public function setSc($sc)
    {
        $this->sc = $sc;
    }

    /**
     * @param Container $sc
     */
    public function __construct(Container $sc)
    {
        $this->sc = $sc;
    }

}