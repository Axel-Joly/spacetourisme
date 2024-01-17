<nav class="lg:mt-8 flex flex-row sm:justify-between overflow-hidden lg:justify-around" >
    
    <ul class='mt-5 z-40 sm:mt-0 justify-evenly content-center items-center flex flex-row  gap-10 barlow'>
        <li>
            <img class='ml-10'src='../img/Logo.png' alt='Logo'/>
        </li>
        <li>
            <img class="relative z-10 left-10 hidden lg:inline" src='../img/Decoration.png' alt='decoration'/>
        </li>
        <li class='sm:hidden absolute ml-10 left-[85%]'>
        <div class=" cursor-pointer z-50 "id="burger">
            <div class=" flex flex-col absolute bottom-0 right-0 " >
              <span data-ui=""  class="lines h-2 font-black data-checked:skew-y-[45deg] data-checked:translate-y-[8px] " id='l1'>___</span>
              <span data-ui="" class="lines h-2 font-black data-checked:opacity-0" id='l2'>___</span>
              <span data-ui="" class="lines h-2 font-black data-checked:skew-y-[135deg] data-checked:translate-y-[-8px]" id='l3'>___</span>
            </div> 
        </div> 
        </li>
            
    </ul>
    <ul data-ui="" id="menu" class='absolute left-[35%] z-[-10] sm:z-10 data-checked:z-30 opacity-0 sm:opacity-100 data-checked:opacity-100  font-barlow sm:static h-[100%] w-[65%] pt-32 sm:pt-0 gap-10  sm:h-20 pl-20 lg:pl-32 sm:pr-20  backdrop-blur-lg sm:bg-light-blue/10 bg-light-blue/10  sm:justify-evenly  sm:items-center flex flex-col sm:flex-row  sm:gap-6 lg:gap-16 barlow'>
        <li class='hover:border-r-white hover:border-r-4 sm:border-none'>
            <a class='sm:hover:underline underline-offset-[30px] decoration-4 tracking-widest sm:decoration-gray-300   ' href="/" ><span class=" font-black tracking-widest sm:hidden xl:inline">00 </span>  ACCEUIL</a>
        </li>
        <li class='hover:border-r-white hover:border-r-4 sm:border-none' >
            <a class=' sm:hover:underline underline-offset-[30px] decoration-4 tracking-widest sm:decoration-gray-300 ' href="/destination"><span class="font-black tracking-widest sm:hidden xl:inline">01 </span> DESTINATION</a>
        </li>
        <li class='hover:border-r-white hover:border-r-4 sm:border-none'>
            <a class='sm:hover:underline underline-offset-[30px] decoration-4 tracking-widest sm:decoration-gray-300' href="/equipage"><span class="font-black tracking-widest sm:hidden xl:inline">02 </span> EQUIPAGE</a>
        </li>
        <li class='hover:border-r-white hover:border-r-4 sm:border-none'>
            <a class='sm:hover:underline underline-offset-[30px] decoration-4 tracking-widest sm:decoration-gray-300' href="/technologie"><span class="font-black tracking-widest sm:hidden xl:inline">03 </span> TECHNOLOGIE</a>
        </li>
    </ul>
</nav>