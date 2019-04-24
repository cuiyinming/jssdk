<?php
namespace GengYun\JosClient;

use Jos\JosClient;

class JosClientFactory
{
    /**
     * Make a new topclient client.
     * @param string[] $config
     * @return JosClient
     */
    public function make(array $config)
    {
        $config = $this->getConfig($config);
        return $this->getClient($config);
    }

    /**
     * Get the configuration data.
     * @param string[] $config
     * @throws \InvalidArgumentException
     * @return string[]
     */
    protected function getConfig(array $config)
    {
        if (!array_key_exists('app_key', $config)
            || !array_key_exists('app_secret', $config)
        ) {
            throw new \InvalidArgumentException('The top client requires api keys.');
        }
        return array_only($config, ['app_key', 'app_secret', 'format']);
    }

    /**
     * Get the josclient client.
     * @param string[] $auth
     * @return CloudsearchClient
     */
    protected function getClient(array $config)
    {
        $c            = new JosClient;
        $c->appKey    = $config['app_key'];
        $c->appSecret = $config['app_secret'];
        $c->logPath   = isset($config['log_path']) ? $config['log_path'] : '/tmp/';
        return $c;
    }
}