<?php

namespace Database\Seeders;

use App\Enums\PositionsEnum;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $positions = [
            PositionsEnum::POSITION_MANAGER,
            PositionsEnum::POSITION_ENGINEER,
            PositionsEnum::POSITION_ACCOUNTER
        ];

        foreach ($positions as $position) {
            Position::create([
                'name' => $position,
                'is_manager' => $position === 'manager'
            ]);
        }
    }
}
