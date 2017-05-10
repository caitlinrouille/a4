<?php

use Illuminate\Database\Seeder;
use App\Player;
use App\Course;


class PlayerCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playerArnoldP = Player::where('full_name','=','Arnold Palmer')->first();
        $playerFredC = Player::where('full_name','=','Fred Couples')->first();
        $playerJohnD = Player::where('full_name','=','John Daly')->first();
        $playerTigerW = Player::where('full_name','=','Tiger Woods')->first();

        //Call to variables:Courses
        $courseSassamon = Course::where('course_name','=','Sassamon Trace')->first();
        $courseBrockton = Course::where('course_name','=','Brockton Country Club')->first();
        $courseBlue = Course::where('course_name','=','Blue Hills Country Club')->first();
        $courseSandy = Course::where('course_name','=','Sandy Burr Country Club')->first();


        $playerArnoldP->courses()->attach($courseSassamon->id);
        $playerArnoldP->courses()->attach($courseBrockton->id);

        $playerFredC->courses()->attach($courseBrockton->id);
        $playerFredC->courses()->attach($courseSandy->id);

        $playerJohnD->courses()->attach($courseBlue->id);
        $playerJohnD->courses()->attach($courseBrockton->id);
        $playerJohnD->courses()->attach($courseSassamon->id);


        $playerTigerW->courses()->attach($courseSassamon->id);
        $playerTigerW->courses()->attach($courseBrockton->id);
        $playerTigerW->courses()->attach($courseBlue->id);
        $playerTigerW->courses()->attach($courseSandy->id);

    }
}
