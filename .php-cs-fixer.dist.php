<?php

$finder = (new PhpCsFixer\Finder())
    ->notPath('.env')
    ->in(__DIR__)
    ->exclude('var');

return (new PhpCsFixer\Config())
    ->setRules([
                   '@Symfony' => true,
                   '@PHP80Migration' => true,
                   'strict_comparison' => true,
                   'strict_param' => true,
                   'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false]
               ])
    ->setFinder($finder);
