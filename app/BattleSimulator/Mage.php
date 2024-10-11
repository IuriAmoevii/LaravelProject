<?php

namespace App\BattleSimulator;

class Mage extends Character
{
    protected $type = 'Mage';

    public function attack(Character $opponent)
    {
        $damageDealt = $this->damage;
        $opponent->setHealth($opponent->getHealth() - $damageDealt);
        echo "{$this->getName()} (Mage) casts a fireball at {$opponent->getName()}!\n";
        echo "{$opponent->getName()} receives {$damageDealt} damage. Health remaining: {$opponent->getHealth()}\n";
    }

    public function heal()
    {
        $healing = 20;
        $this->setHealth($this->getHealth() + $healing);
        echo "{$this->getName()} (Mage) conjures a healing spell and restores {$healing} health.\n";
        echo "{$this->getName()}'s health is now: {$this->getHealth()}\n";
    }
}
