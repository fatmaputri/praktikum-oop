<?php

class ValidatorEncap {

    protected array $errors = [];
    protected string $inputType = "POST";

    public function addError(string $msg): void {
        $this->errors[] = $msg;
    }

    public function getErrors(): array {
        return $this->errors;
    }
}

$val = new ValidatorEncap();

// ❗ COBA AKSES PROPERTY PROTECTED (HARUS ERROR)
$val->inputType = "GET";   // <- ini akan error
