<?php


namespace Application\Model;


class User
{
    public $id;
    public $email;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->email = !empty($data['email']) ? $data['email'] : null;
    }
}