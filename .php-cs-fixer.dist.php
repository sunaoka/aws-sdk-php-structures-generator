<?php

/**
 * PHP Coding Standards Fixer.
 *
 * @see https://cs.symfony.com/
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
$dirs = [
    __DIR__ . '/bin',
    __DIR__ . '/src',
    __DIR__ . '/tests',
    __DIR__ . '/classes',
];

$rules = [
    '@PhpCsFixer'            => true,
    '@PER-CS3x0'             => true,
    'binary_operator_spaces' => [
        'default'   => 'single_space',
        'operators' => [
            '=>' => 'align_single_space_minimal',
        ],
    ],
    'fully_qualified_strict_types' => true,
    'global_namespace_import'      => [
        'import_classes' => false,
    ],
    'increment_style'                   => false,
    'not_operator_with_successor_space' => true,
    'phpdoc_align'                      => [
        'tags' => [
            'method',
            'param',
            'property',
            'return',
            'throws',
            'type',
            'var',
            'phpstan-type',
            'phpstan-import-type',
        ],
    ],
    'phpdoc_no_empty_return' => false,
    'phpdoc_to_comment'      => false,
    'yoda_style'             => false,
];

return new PhpCsFixer\Config()
    ->setRules($rules)
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setFinder(PhpCsFixer\Finder::create()->in($dirs)->append([__FILE__]))
;
