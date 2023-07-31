<?php

namespace App\Service\Exception;

use RuntimeException;
use Throwable;

class CustomException extends RuntimeException
{
    public function __construct(string $message = 'Custom Exception', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public static function InvalidImageType(): self
    {
        return new self('Invalid file type. Only jpg, jpeg, png and gif types are allowed');
    }
    public static function NoFileUploaded(): self
    {
        return new self('No file uploaded');
    }
    public static function ErrorUploadingFile(): self
    {
        return new self('Error uploading file');
    }
}