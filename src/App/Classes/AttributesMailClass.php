<?php

namespace Src\App\Classes;

/**
 * Class AttributesMailClass
 * @package Src\App\Classes
 */
class AttributesMailClass
{
    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $message;

    /**
     * @var array
     */
    public $status = array('status_code' => null, 'description_status' => null);

    /**
     * method __get elements
     * @param string $attribute
     * @return mixed
     */
    public function __get($attribute): mixed
    {
        return $this->$attribute;
    }

    /**
     * method __set elements
     * @param string $attribute
     * @param mixed $value
     * @return void
     */
    public function __set($atribute, $value): void
    {
        $this->$atribute = $value;
    }
}
