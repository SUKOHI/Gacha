Gacha
=====

A PHP package mainly developed for Laravel to generate random string consisting of alphabets and(or) numeric characters.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Gacha\GachaServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Gacha' => 'Sukohi\Gacha\Facades\Gacha',
    )

Usage
====

Basic  

    echo Gacha::generate();  
    
with Length (Default: 7)

    echo Gacha::generate(10);  

Only nemeric characters  

     echo Gacha::generate(5)->numeric();  
Only alphabets

    echo Gacha::generate(10)->alphabet();
Upper Case  

    echo Gacha::generate(7)->upperCase();
    echo Gacha::generate()->alphabet()->upperCase();

Lower Case  

    echo Gacha::generate(15)->alphabet()->lowerCase();
Specific characters  

    echo Gacha::generate(8)->characters('abcd');