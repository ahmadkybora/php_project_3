<?php

namespace RectorPrefix20210909;

if (\interface_exists('Tx_Extbase_Validation_Validator_ValidatorInterface')) {
    return;
}
interface Tx_Extbase_Validation_Validator_ValidatorInterface
{
}
\class_alias('Tx_Extbase_Validation_Validator_ValidatorInterface', 'Tx_Extbase_Validation_Validator_ValidatorInterface', \false);
