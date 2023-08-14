<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm{

    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if(! Validator::email($attributes['email'])){

            $this->errors['email'] = 'Please enter the valid email!';
        }

        if(! Validator::string($attributes['password'])){

            $this->errors['password'] = 'Please enter the validate password!';
        }
    }

    public static function validate($attributes){

        $instance = new static($attributes);

        if($instance->failed()){
            // throw new ValidationException();
           return $instance->failed() ? $instance->throw() : $instance ;

        }

        return $instance;
    }

    public function failed(){

        return count($this->errors);
    }

    public function throw(){

        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function errors(){

        return $this->errors;
    }

    public function error($field, $message){

        $this->errors[$field] = $message;

        return $this;
    }

}