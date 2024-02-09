<?php

// recuperation de {{$page}} depuis l'url
$url = url()->current();
$part = explode("/",$url) ;
// print_r($part) ;
isset($part[3]) ? $page = $part[3] : $page="";
?>


<nav class="lg:mt-8 flex flex-row justify-between overflow-hidden w-full lg:justify-around m-0 p-0" >
    
    <ul class='mt-5 z-40 sm:mt-0 justify-between sm:justify-evenly content-center items-center flex flex-row w-[100%] sm:gap-10 barlow'>
        <li>
            <img class='ml-10'src='../img/Logo.png' alt='Logo'/>
        </li>
        <li>
            <img class="relative z-10 left-10 hidden lg:inline" src='../img/Decoration.png' alt='decoration'/>
        </li>
        <li class='sm:hidden z-20 relative mr-10 '>
        <div class=" cursor-pointer z-50 "id="burger">
            <div class=" flex flex-col absolute bottom-0 left-0 font-barlowC " >
              <span data-ui=""  class="lines h-2 font-black data-checked:skew-y-[45deg] data-checked:translate-y-[8px] " id='l1'>___</span>
              <span data-ui="" class="lines h-2 font-black data-checked:opacity-0" id='l2'>___</span>
              <span data-ui="" class="lines h-2 font-black data-checked:skew-y-[135deg] data-checked:translate-y-[-8px]" id='l3'>___</span>
            </div> 
        </div> 
        </li>
            
    </ul>
    <ul data-ui="" id="menu" class='absolute left-[35%] z-[-10] sm:z-10 data-checked:z-30 opacity-0 sm:opacity-100 data-checked:opacity-100  font-barlowC sm:static h-full w-[65%] pt-32 sm:pt-0 gap-10  sm:h-20 pl-20 lg:pl-32 sm:pr-20 lg:pr-5  backdrop-blur-lg  bg-lightB/10  sm:justify-evenly  sm:items-center flex flex-col sm:flex-row sm:gap-6 lg:gap-16 tracking-[2.7px]'>
        
        <li class="{{ $page != '' ? '' : 'border-r-white border-r-4' }} hover:border-r-lightB hover:border-r-4 sm:border-none">
            <a class="{{ $page != '' ? '' : 'sm:underline sm:decoration-lightB' }} inline-flex  sm:hover:underline underline-offset-[30px] decoration-4 sm:decoration-gray-300 uppercase " href="/" ><span class=" font-black sm:hidden xl:inline whitespace-pre">00 </span> @lang('home')</a>
        </li>

        <li class="{{ $page != 'destination' ? '' : 'border-r-white border-r-4' }} hover:border-r-white hover:border-r-4 sm:border-none">
            <a class="{{ $page != 'destination' ? '' : 'sm:underline sm:decoration-lightB' }} inline-flex sm:hover:underline underline-offset-[30px] decoration-4  sm:decoration-gray-300 uppercase " href="/destination/@lang('moon')"><span class="font-black sm:hidden xl:inline whitespace-pre">01 </span> @lang('destination')</a>
        </li>
       
        <li class="{{ $page != 'crew' ? '' : 'border-r-white border-r-4' }} hover:border-r-white hover:border-r-4 sm:border-none">
            <a class="{{ $page != 'crew' ? '' : 'sm:underline sm:decoration-lightB' }} inline-flex sm:hover:underline underline-offset-[30px] decoration-4  sm:decoration-gray-300 uppercase" href="/@lang('crew')/douglas_hurley"><span class="font-black sm:hidden xl:inline whitespace-pre">02 </span> @lang('crew')</a>
        </li>
        
        <li class="{{ $page != 'technology' ? '' : 'border-r-white border-r-4' }} hover:border-r-white hover:border-r-4 sm:border-none">
            <a class="{{ $page != 'technology' ? '' : 'sm:underline sm:decoration-lightB' }} inline-flex sm:hover:underline underline-offset-[30px] decoration-4  sm:decoration-gray-300 uppercase" href="/@lang('technology')/@lang('the_launcher')"><span class="font-black sm:hidden xl:inline whitespace-pre">03 </span> @lang('technology')</a>
        </li>
        <li>
            <div>
                <a href="/language/fr"class='uppercase'><img src={{asset("/img/fr.png")}} alt="drapeau francais" class='max-h-5'>fr</a>
            </div>
        </li>

        <li>
            <div>
                <a href="/language/en"class='uppercase'><img src={{asset("/img/en.png")}} alt="drapeau anglais" class='max-h-5'>en</a>
            </div>   
        </li>               
    </ul>
</nav>