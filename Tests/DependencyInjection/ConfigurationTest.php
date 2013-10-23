<?php

namespace TuxOne\PostmarkBundle\Tests\DependencyInjection;

use TuxOne\PostmarkBundle\DependencyInjection\Configuration;

/**
 * Test Configuration
 *
 * @author Miguel Perez <miguel@mlpz.mp>
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test get config tree
     *
     * @covers  TuxOne\PostmarkBundle\DependencyInjection\Configuration::getConfigTreeBuilder
     */
    public function testThatCanGetConfigTreeBuilder()
    {
        $configuration = new Configuration();
        $this->assertInstanceOf('Symfony\Component\Config\Definition\Builder\TreeBuilder', $configuration->getConfigTreeBuilder());
    }
}
