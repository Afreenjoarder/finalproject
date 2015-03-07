
<?php

use Illuminate\Database\Seeder;

class TaskscatagoriesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasksCatagories')->delete();

        $tasksCatagories = array(
            ['id' => 1, 'cTitle' => 'design',  'created_by' => 'ram',   'modified_by' =>'ramesh', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'cTitle' => 'laravel', 'created_by' => 'manat', 'modified_by' =>'ramesh', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'cTitle' => 'php',     'created_by' => 'runa',  'modified_by' =>'jamal',  'created_at' => new DateTime, 'updated_at' => new DateTime],



        );

        //// Uncomment the below to run the seeder
        DB::table('tasksCatagories')->insert($tasksCatagories);
    }

}

