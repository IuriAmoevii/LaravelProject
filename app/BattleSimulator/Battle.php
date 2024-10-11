<?php

namespace App\BattleSimulator;

class Battle implements BattleMechanics
{
    public static $totalBattles = 0;
    protected $round = 0;

    public function startBattle(Character $char1, Character $char2)
    {
        self::$totalBattles++;
        echo "========= RPG Battle Simulator =========\n";
        echo "Starting battle between {$char1->getName()} ({$char1->getType()}) and {$char2->getName()} ({$char2->getType()})!\n";
        
        while ($char1->getHealth() > 0 && $char2->getHealth() > 0) {
            $this->round++;
            echo ">> Round {$this->round}:\n";

            $char1->attack($char2);
            if ($char2->getHealth() <= 0) break;

            if ($char2 instanceof Mage && $this->round % 2 === 0) {
                $char2->heal();
            } else {
                $char2->attack($char1);
            }
        }

        $this->endBattle($char1, $char2);
    }

    protected function endBattle(Character $char1, Character $char2)
    {
        echo "========= End of Battle =========\n";
        $winner = $char1->getHealth() > 0 ? $char1 : $char2;
        $loser = $char1->getHealth() <= 0 ? $char1 : $char2;

        echo "{$loser->getName()} ({$loser->getType()}) has been defeated!\n";
        echo "Winner: {$winner->getName()} ({$winner->getType()})\n";
        echo "Total rounds: {$this->round}\n";
    }

    public static function getTotalBattles()
    {
        return self::$totalBattles;
    }
}
