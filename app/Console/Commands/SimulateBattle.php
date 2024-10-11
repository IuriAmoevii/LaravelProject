<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\BattleSimulator\Warrior;
use App\BattleSimulator\Mage;
use App\BattleSimulator\Battle;

class SimulateBattle extends Command
{
    protected $signature = 'simulate:battle';
    protected $description = 'Simulates an RPG battle between two characters.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $aragorn = new Warrior('Aragorn', 100, 25);
        $gandalf = new Mage('Gandalf', 100, 30);

        $battle = new Battle();
        $battle->startBattle($aragorn, $gandalf);
    }
}
