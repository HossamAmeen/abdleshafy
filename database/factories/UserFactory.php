<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $users = array(1,0);

    return [
        'name' => 'admin',
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // secret
        'remember_token' => str_random(10),
        'role' => $faker->randomElement($users),
    ];
});
$factory->define(App\Blog::class, function (Faker $faker) {

    $users = App\User::pluck('id')->toArray();

return [
    'ar_title' => 'احجز شقتك بسعر التكلفه ' ,
    'owner' => 'محمود عبد الشافي',
    'date' => date("Y-m-d") ,
    'user_id'=>$faker->randomElement($users),
    'description' => 'هل كفايه أني عرفت اختار ارض مساحتها وموقعها مناسبين زي ما قلنا؟؟! ' ,
    
];
});

$factory->define(App\Project::class, function (Faker $faker){


    $users = App\User::pluck('id')->toArray();
    return 
    [
        'ar_title'=>'بيتك بايدك ',
        'site'=>'https://baitkbiedak.com/',
        'video'=>'https://www.youtube.com/watch?time_continue=3&v=CeKzecSVUxk',
        'user_id'=>$faker->randomElement($users),
        'description'=>'يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء',

        
    ];
});

$factory->define(App\News::class, function (Faker $faker) {



        $users = App\User::pluck('id')->toArray();  
    return [
        'ar_title' => 'يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم ' ,
        'description' => 'وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.',

        'user_id'=>$faker->randomElement($users),

    ];
});
$factory->define(App\Video::class, function (Faker $faker) {


    $users = App\User::pluck('id')->toArray();

    return [
   
    'link'=>'https://www.youtube.com/watch?v=zqFg6f-9UJE',
    
    
        'user_id'=>$faker->randomElement($users),
];
});
$factory->define(App\Pref::class , function (Faker $faker){
   

    return[
        'name'     =>'الموقع الرسمي للمطور العقاري محمود عبدالشافي',
        'description' =>'description',
        'phone'         =>'01079979798',
        'email'     =>'contact@example.com',
        'facebook'      =>'https://www.facebook.com/',
        'twitter'       =>'https://www.twitter.com/',
        'instagram'      =>'https://www.instagram.com/',
        'youtube'      =>'https://www.youtube.com/',

    ];
});

