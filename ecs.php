<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
  ->withPaths([__DIR__ . '/src'])
  ->withRootFiles()
  ->withEditorConfig(true)
  ->withParallel()
  ->withPhpCsFixerSets(psr1: true);
