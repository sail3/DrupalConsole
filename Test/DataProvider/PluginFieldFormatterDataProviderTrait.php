<?php

namespace Drupal\Console\Test\DataProvider;

/**
 * Class PluginFieldFormatterDataProviderTrait
 * @package Drupal\Console\Test\DataProvider
 */
trait PluginFieldFormatterDataProviderTrait
{
    /**
     * @return array
     */
    public function commandData()
    {
        $this->setUpTemporalDirectory();

        return [
          ['Foo',  'foo' . rand(), 'bar', 'bar' . rand(), 'foo-bar']
        ];
    }
}
