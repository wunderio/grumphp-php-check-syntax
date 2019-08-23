<?php
namespace wunderio\PhpCheckSyntaxTask;
use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
/**
 * Class ExtensionLoader
 *
 * @author Hannes Kirsman <hkirsman@gmail.com>
 * @package wunderio\PhpCheckSyntaxTask
 */
class ExtensionLoader implements ExtensionInterface
{
  /**
   * @param ContainerBuilder $container
   *
   * @return \Symfony\Component\DependencyInjection\Definition
   * @throws \Exception
   * @throws \Symfony\Component\DependencyInjection\Exception\BadMethodCallException
   * @throws \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
   * @throws \Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException
   * @throws \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
   */
  public function load(ContainerBuilder $container)
  {
    return $container->register('task.php_check_syntax', PhpCheckSyntaxTask::class)
      ->addArgument(new Reference('config'))
      ->addArgument(new Reference('process_builder'))
      ->addArgument(new Reference('formatter.raw_process'))
      ->addTag('grumphp.task', ['config' => 'php_check_syntax']);
  }
}
