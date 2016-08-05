<?php

class ErrorController
{
    /**
     * @var string
     */
    private $errorMessage;
    /**
     * @var int
     */
    private $status;

    /**
     * ErrorController constructor.
     * @param string $errorMessage
     */
    public function __construct($errorMessage, $status)
    {
        $this->errorMessage = $errorMessage;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function errorAction(){
        http_response_code($this->status);
        require_once ROOT. 'View/Error/' . $this->status . '.php';
    }

}