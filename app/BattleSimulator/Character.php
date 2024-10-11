<?php

namespace App\BattleSimulator;

abstract class Character
{
    protected $name;
    protected $health;
    protected $damage;
    protected $type;

    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    abstract public function attack(Character $opponent);
}
