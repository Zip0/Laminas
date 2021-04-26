<?php


namespace Application\Model;


class Permisison
{
    public $id;
    public $level;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->level = !empty($data['level']) ? $data['level'] : null;
    }

}