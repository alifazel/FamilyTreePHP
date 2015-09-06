<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // call our class and run our seeds
        $this->call('UserTableSeeder');
        $this->command->info('Database has been sucessfully seeded!');


        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {
    
    public function run() {

        // clear our database ------------------------------------------
        DB::table('users')->delete();
        DB::table('persons')->delete();
        DB::table('images')->delete();


        // Seed the Persons Table

        // Father 
        $daveLove = App\Person::create(array(
            'first_name'  => 'Dave',
            'last_name'  => 'Love',
            'father_id' => NULL,
            'mother_id' =>  NULL,
            'dob' =>  '1952-01-07',
            'dod' =>  '1999-04-07',
            'description' =>  'Dave Love was an independent mechanic with 3 children',
            'gender' =>  'M',
            'marriage_id' => NULL,
        ));

        // Mother 
        $leenaLove = App\Person::create(array(
            'first_name'  => 'Leena',
            'last_name'  => 'Love',
            'father_id' => NULL,
            'mother_id' =>  NULL,
            'dob' =>  '1955-02-05' ,
            'dod' =>  NULL,
            'description' =>  'Leena Love is was a house wife and is now currently studying fashion design.',
            'gender' =>  'F',
            'marriage_id' => NULL,
        ));

        // Son 1
        $tysonLove = App\Person::create(array(
            'first_name'  => 'Tyson',
            'last_name'  => 'Love',
            'father_id' => $daveLove->id,
            'mother_id' =>  $leenaLove->id,
            'dob' =>  '1980-02-01' ,
            'dod' =>  NULL,
            'description' =>  'Tyson love is the eldest child in his family. Currently teaching at college',
            'gender' =>  'M',
            'marriage_id' =>  NULL,
        ));

        // Son 2
        $fosterLove = App\Person::create(array(
            'first_name'  => 'Foster',
            'last_name'  => 'Love',
            'father_id' => $daveLove->id,
            'mother_id' =>  $leenaLove->id,
            'dob' =>  '1988-07-09' ,
            'dod' =>  NULL,
            'description' =>  'Foster is the second eldest child in his family. Doing an apprentership.',
            'gender' =>  'M',
            'marriage_id' =>  NULL,
        ));

        // Daughter 1
        $jeanLove = App\Person::create(array(
            'first_name'  => 'Jean',
            'last_name'  => 'Love',
            'father_id' => $daveLove->id,
            'mother_id' =>  $leenaLove->id,
            'dob' =>  '1996-06-06' ,
            'dod' =>  NULL,
            'description' =>  'Jean is the youngest child in her family. She recently started high school..',
            'gender' =>  'F',
            'marriage_id' =>  NULL,
        ));

        $this->command->info('People have been generated in the database!');

        // Set marriage relationships
        $daveLove->marriage_id = $daveLove->gender . $daveLove->id . $leenaLove->gender. $leenaLove->id;
        $leenaLove->marriage_id = $daveLove->gender . $daveLove->id . $leenaLove->gender. $leenaLove->id;

        $this->command->info('Relationship links have been created!');
        
        // Create Image Gallery

        $images_daveLove = App\Image::create(array(
            'url' => 'http://www.alifazel.com/sample_images/faces/dad_full.jpg',
            'url_thumb' => 'http://www.alifazel.com/sample_images/faces/dad_thumb.jpg',
            'description' => 'Profile Picture of Dave Love',
            'date_taken' => '1998-02-10',
        ));

        $images_leenaLove = App\Image::create(array(
            'url' => 'http://www.alifazel.com/sample_images/faces/mum_full.jpg',
            'url_thumb' => 'http://www.alifazel.com/sample_images/faces/mum_thumb.jpg',
            'description' => 'Profile Picture of Leena Love',
            'date_taken' => '2002-02-10',
        ));

        $images_tysonLove = App\Image::create(array(
            'url' => 'http://www.alifazel.com/sample_images/faces/son1_full.jpg',
            'url_thumb' => 'http://www.alifazel.com/sample_images/faces/son1_thumb.jpg',
            'description' => 'Profile Picture of Tyson Love',
            'date_taken' => '2002-02-10',
        ));

        $images_fosterLove = App\Image::create(array(
            'url' => 'http://www.alifazel.com/sample_images/faces/son2_full.jpg',
            'url_thumb' => 'http://www.alifazel.com/sample_images/faces/son2_thumb.jpg',
            'description' => 'Profile Picture of Foster Love',
            'date_taken' => '2002-02-10',
        ));

        $images_jeanLove = App\Image::create(array(
            'url' => 'http://www.alifazel.com/sample_images/faces/daughter_full.jpg',
            'url_thumb' => 'http://www.alifazel.com/sample_images/faces/daughter_thumb.jpg',
            'description' => 'Profile Picture of Jean Love',
            'date_taken' => '2002-02-10',
        ));

        // Create image relation
        $daveLove->images()->attach($images_daveLove->id);
        $leenaLove->images()->attach($images_leenaLove->id);
        $tysonLove->images()->attach($images_tysonLove->id);
        $fosterLove->images()->attach($images_fosterLove->id);
        $jeanLove->images()->attach($images_jeanLove->id);

        $this->command->info('Image gallery has been created!');

        $daveLove->profile_picture_id = $images_daveLove->id;
        $leenaLove->profile_picture_id = $images_leenaLove->id;
        $tysonLove->profile_picture_id = $images_tysonLove->id;
        $fosterLove->profile_picture_id = $images_fosterLove->id;
        $jeanLove->profile_picture_id = $images_jeanLove->id;

        $daveLove->save();
        $leenaLove->save();
        $tysonLove->save();
        $fosterLove->save();
        $jeanLove->save();

        $this->command->info('Profile Pictures have been set!');

        // Create User Account

        App\User::create(array(
            'email' => 'leenalove@hotmail.com',
            'username' => 'leena',
            'password' => 'love',
            'person_id' => $leenaLove->id,
        ));

        $this->command->info('User account has been created');


        // WIP - Fill in the rest of the people. Create a Hierachy and use that to generate. Create a gallery also (1P 1Img, 2P 1Img)
    }
}