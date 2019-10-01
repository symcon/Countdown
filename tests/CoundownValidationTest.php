<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class CountdownValidationTest extends TestCaseSymconValidation
{
    public function testValidateCountdown(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateCountdownModule(): void
    {
        $this->validateModule(__DIR__ . '/../Countdown');
    }
}