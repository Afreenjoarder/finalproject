<?php

use Illuminate\Database\Seeder;

class VotesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('votes')->delete();

        $votes = array(
            ['votes_id' => 11, 'voter_id' => 1,  'candidates_symbol' => 'Laptop', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['votes_id' => 12, 'voter_id' => 2,  'candidates_symbol' => 'Mirror','created_at' => new DateTime, 'updated_at' => new DateTime],
            ['votes_id' => 13, 'voter_id' => 3,  'candidates_symbol' => 'Candle', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('votes')->insert($votes);
    }

}