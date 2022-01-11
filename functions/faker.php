<?php
function faker() : object
{
    $faker = \Faker\Factory::create();
    return $faker ;
}

function addUserFake(int $countUser) : bool
{
    $faker = faker();
    for($i = 0 ; $i <= $countUser ; $i++){
        $data = array(
            'email' => $faker->email()  ,
            'password' => $faker->text(rand(5,15)),
            'full_name' => $faker->name(),
            'mobile' => $faker->phoneNumber(),
            'role' => rand(1,2),
            'confirmed' => rand(0,1),
        );
        newUser($data);
        
    }
    return true ;
}