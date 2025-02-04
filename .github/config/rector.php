<?php

declare(strict_types=1);

return static function (\Rector\Config\RectorConfig $rectorConfig): void {
    $rectorConfig->parallel();
    $rectorConfig->importNames();

    $rectorConfig->phpVersion(\Rector\ValueObject\PhpVersion::PHP_84);

    $rectorConfig->paths(
        [
            __DIR__ . '/src',
            __DIR__ . '/tests',
        ],
    );

    // Sets for PHP 8.4
    $rectorConfig->sets(
        [
            \Rector\Set\ValueObject\SetList::PHP_84,
            \Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_84,
            \Rector\Set\ValueObject\SetList::CODE_QUALITY,
            \Rector\Set\ValueObject\SetList::CODING_STYLE,
            \Rector\Set\ValueObject\SetList::TYPE_DECLARATION,
        ],
    );

    $rectorConfig->skip(
        [
            \Rector\Php73\Rector\String_\SensitiveHereNowDocRector::class,
            \Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector::class,
            \Rector\Php81\Rector\Property\ReadOnlyPropertyRector::class,
        ],
    );

    $rectorConfig->rule(\Rector\Php84\Rector\Class_\AddReturnTypeDeclarationFromPhpDocRector::class);
    $rectorConfig->rule(\Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class);
    $rectorConfig->rule(\Rector\CodingStyle\Rector\FuncCall\ConsistentImplodeRector::class);
    $rectorConfig->rule(\Rector\Strict\Rector\BooleanNot\BooleanInBooleanNotRuleFixerRector::class);
};
