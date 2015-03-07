<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters = array(
            ['voter_id' => 1, 'voterName' => 'gdg',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['voter_id' => 2, 'voterName' => 'sa',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['voter_id' => 3, 'voterName' => 'asa',  'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}