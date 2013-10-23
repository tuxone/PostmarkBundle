<?php

namespace TuxOne\PostmarkBundle\Tests\DependencyInjection;

use TuxOne\PostmarkBundle\DependencyInjection\TuxOnePostmarkExtension;

/**
 * Test TuxOnePostmarkBundleExtension
 *
 * @author Miguel Perez <miguel@mlpz.mp>
 */
class TuxOnePostmarkExtensionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test load failed
     *
     * @covers TuxOne\PostmarkBundle\DependencyInjection\MZPostmarkExtension::load
     */
    public function testLoadFailed()
    {
        $container = $this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerBuilder')
                ->disableOriginalConstructor()
                ->getMock();

        $extension = $this->getMockBuilder('TuxOne\PostmarkBundle\DependencyInjection\TuxOnePostmarkExtension')
                ->getMock();

        $extension->load(array(array()), $container);
    }

    /**
     * Test setParameters
     *
     * @covers TuxOne\PostmarkBundle\DependencyInjection\MZPostmarkExtension::load
     */
    public function testLoadSetParameters()
    {
        $container = $this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerBuilder')
                ->disableOriginalConstructor()
                ->getMock();

        $parameterBag = $this->getMockBuilder('Symfony\Component\DependencyInjection\ParameterBag\\ParameterBag')
                ->disableOriginalConstructor()
                ->getMock();

        $parameterBag->expects($this->any())
                ->method('add');

        $container->expects($this->any())
                ->method('getParameterBag')
                ->will($this->returnValue($parameterBag));

        $extension = new TuxOnePostmarkExtension();
        $configs = array(
            array('api_key' => 'foo'),
            array('from_email' => 'foo'),
            array('from_name' => 'foo')
        );
        $extension->load($configs, $container);
    }
}
