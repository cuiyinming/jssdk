<?php
namespace GengYun\JosClient;

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

class JosClientManager extends AbstractManager
{
    protected $factory;

    public function __construct(Repository $config, JosClientFactory $factory)
    {
        parent::__construct($config);
        $this->factory = $factory;
    }

    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }

    protected function getConfigName()
    {
        return 'jd_jos';
    }

    public function getFactory()
    {
        return $this->factory;
    }
}