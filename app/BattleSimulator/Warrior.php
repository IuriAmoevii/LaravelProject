<?php

namespace App\BattleSimulator;

class Warrior extends Character
{
    protected $type = 'Warrior';

    public function attack(Character $opponent)
    {
        $damageDealt = $this->damage;
        $opponent->setHealth($opponent->getHealth() - $damageDealt);
        echo "{$this->getName()} (Warrior) attacks {$opponent->getName()} with a sword!\n";
        echo "{$opponent->getName()} receives {$damageDealt} damage. Health remaining: {$opponent->getHealth()}\n";
    }
}
