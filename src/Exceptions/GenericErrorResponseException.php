<?php

namespace Webleit\RevisoApi\Exceptions;

use Throwable;

class GenericErrorResponseException extends ErrorResponseException
{

    public function __construct ($error)
    {
        $message = sprintf(
            "Error Code: %s. Message: %s. Hint: %s. ",
            $error->httpStatusCode, $error->message,  $error->developerHint
        );

        parent::__construct($message);
    }
}