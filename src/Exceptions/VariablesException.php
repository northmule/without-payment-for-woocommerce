<?php

declare(strict_types=1);

namespace Coderun\WithoutPaymentWoocommerce\Exceptions;

/**
 * Class VariablesException
 *
 * @package Coderun\WithoutPaymentWoocommerce\Exceptions
 */
class VariablesException extends BaseException implements ExceptionInterface
{
    /**
     * @param string $variableName
     *
     * @return VariablesException
     */
    public static function valueIsNotDefined(string $variableName): VariablesException
    {
        return new self(
            sprintf(
                'The value of the %s variable is undefined or does not exist',
                $variableName
            ),
        );
    }
}
