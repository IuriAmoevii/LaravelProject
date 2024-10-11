<?php

namespace App\BattleSimulator;

interface BattleMechanics
{
    public function startBattle(Character $char1, Character $char2);
}
