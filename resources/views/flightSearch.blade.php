<x-layout>


        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box bg-white relative">
                <div class=" absolute right-2 top-2 bg-info text-white flex justify-center rounded-full text-center drop-shadow-2xl px-3 py-1.5 ">
                    <label for="my-modal-3" >✕</label>
                </div>

                <h3 class="text-lg font-bold">Congratulations random Internet user!</h3>
                <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
            </div>
        </div>





        <div class="w-full p-5 h-auto bg-sky-200 text-black flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row justify-center sm:flex-col flex-col ">

            <div class="flex mr-5 2xl:w-1/4 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-5 mt-5 justify-center ">
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2  flex flex-col text-center 2xl:px-10 xl:px-10 lg:px-0 md:px-0 text-center border-r-2 border-r-gray-300 relative ">
                    <span class=" text-xs text-gray-600 font-semibold">From</span>
                    <span class=" text-black font-bold text-md">Delhi Indira Gandhi Intl (DEL)</span>
                    <div class="absolute -right-5 top-3 p-2 px-3 bg-white rounded-full"><i class="fa-solid fa-arrow-right-arrow-left"></i></div>
                </div>
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2  flex flex-col text-center 2xl:px-10 xl:px-10 lg:px-0 md:px-0 text-center border-r-2 border-r-gray-300 ">
                    <span class=" text-xs text-gray-600 font-semibold">To </span>
                    <span class=" text-black font-bold text-md">Dubai Intl Arpt (DXB)</span>
                </div>
            </div>

            <div class="flex mr-5 2xl:w-1/5 xl:w-1/5 lg:w-1/5 md:w-1/5 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-5 mt-5 justify-center ">
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2  flex flex-col text-center 2xl:px-10 xl:px-10 lg:px-0 md:px-0 text-center border-r-2 border-r-gray-300 ">
                    <span class=" text-xs text-gray-600 font-semibold">Departure Date </span>
                    <span class=" text-black font-bold text-md">02/05/2023</span>
                </div>
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2  flex flex-col text-center 2xl:px-10 xl:px-10 lg:px-0 md:px-0 text-center border-r-2 border-r-gray-300 ">
                    <span class=" text-xs text-gray-600 font-semibold">Returning Date </span>
                    <span class=" text-black font-bold text-md">10/05/2023</span>
                </div>
            </div>

            <div class="flex mr-5 2xl:w-1/4 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-5 mt-5 justify-center ">
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2  flex flex-col text-center 2xl:px-10 xl:px-10 lg:px-0 md:px-0 text-center border-r-2 border-r-gray-300 ">
                    <span class=" text-xs text-gray-600 font-semibold">Passengers & Class</span>
                    <span class=" text-black font-bold text-md">1Adult, Economy</span>
                </div>
                <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2 text-center  border-r-2 border-r-gray-300 ">
                    <button class=" p-2 bg-yellow-400 text-black rounded-md  ">Modify Search</button>
                </div>
            </div>


        </div>

        <section class="flex w-full 2xl:flex-row xl:flex-row lg:flex-row md:flex-col sm:flex-col flex-col  justify-between">


            {{--        section left div starts here--}}
            <div class="2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-full sm:w-full w-full 2xl:pl-48 xl:pl-40 lg:pl-24 md:pl-5 sm:pl-5 pl-5 pt-12 pr-5">
                <span class="font-semibold text-lg text-black">Filter Result</span>
                <div class="mt-5 pb-5 border-b-2 border-b-gray-300">

                    <span class="font-semibold text-md text-black">Stops </span>

                    <div class="flex items-center mt-3 ">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">Non Stop</span>
                    </div>
                    <div class="flex items-center mt-1 ">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">1 Stop</span>
                    </div>
                    <div class="flex items-center mt-1 ">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">2 Stop</span>
                    </div>

                </div>

                <div class="mt-5 pb-5 border-b-2 border-b-gray-300">

                    <span class="font-semibold text-md text-black">Departure  </span>
                    <div class="flex items-center mt-3 ">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">Before 6AM</span>
                    </div>
                    <div class="flex items-center mt-2">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">6AM -12Noon </span>
                    </div>
                    <div class="flex items-center mt-2">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">12Noon-6PM </span>
                    </div>
                    <div class="flex items-center mt-2">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">After 6 PM </span>
                    </div>
                </div>

                <div class="mt-5 pb-12 border-b-2 border-b-gray-300">

                    <span class="font-semibold text-md text-black">Price Range </span>
                    <div class="flex items-center mt-3 ">
                        <span class="text-black text-sm ml-2">&#8377 235.85 - &#8377 563.35</span>
                    </div>
                    <div class="flex items-center mt-5">
                        <input type="range" min="0" max="100" value="40" class="range range-xs w-full" />
                    </div>


                </div>

                <div class="mt-5 pb-5 border-b-2 border-b-gray-300">

                    <span class="font-semibold text-md text-black"> Airlines  </span>
                    <div class="flex items-center flex items-center mt-3">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">EK </span> <img class="ml-4 w-6 h-auto object-cover" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                    </div>

                    <div class="flex items-center flex items-center mt-2">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">SV </span> <img class="ml-4 w-6 h-auto object-cover" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirSV.gif" alt="">
                    </div>

                    <div class="flex items-center flex items-center mt-3">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">EK </span> <img class="ml-4 w-6 h-auto object-cover" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                    </div>

                    <div class="flex items-center flex items-center mt-2">
                        <input type="checkbox" class="rounded-md ">
                        <span class="text-black text-sm ml-2">SV </span> <img class="ml-4 w-6 h-auto object-cover" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirSV.gif" alt="">
                    </div>

                </div>

            </div>
            {{--        section left div ends here --}}


            {{--       section right div starts here--}}
            <div class="2xl:w-3/4 xl:w-3/4 lg:w-3/4 md:w-full sm:w-full w-full pt-14 2xl:pr-48 xl:pr-40 lg:pr-24 md:pr-5 sm:pr-5 pr-5 pl-5">

                <div class="2xl:hidden xl:hidden lg:hidden md:flex sm:flex flex bg-sky-500 text-white rounded-md justify-between p-2 mb-5">
                    <span class="mt-2">96 <span>Flights Found </span></span>
                    <button class="text-black mr-10 outline outline-gray-300 py-2 px-5 rounded-sm outline-offset-2 outline-1">FILTERS <i class="fa-solid fa-filter"></i></button>
                </div>

                <div class=" w-full p-3  bg-slate-300 text-black rounded-md " >
                    <span class="font-semibold text-lg"><i class="fa-solid fa-database mr-3"></i>Cheapest</span><br>
                    <span class="font-semibold">Price:  <span>&#8377 235.85 </span></span>
                </div>

                <div class=" 2xl:flex xl:flex lg:flex md:flex sm:hidden hidden  w-full p-1.5  bg-sky-500 text-white rounded-md flex mt-5" >
                    <div class="w-2/5 ">
                        <span>AIRLINES</span>
                    </div>
                    <div class="w-1/3">
                        <span>DEPARTURE <button class="cursor-pointer text-sm"><i class="fa-solid fa-arrow-up ml-1"></i> <i class="fa-solid fa-arrow-down"></i></button></span>
                    </div>
                    <div class="w-1/5">
                        <span>DURATION <button class="cursor-pointer text-sm"><i class="fa-solid fa-arrow-up ml-1"></i> <i class="fa-solid fa-arrow-down"></i></button></span>
                    </div>
                    <div class="w-1/5 text-center ">
                        <span>ARRIVAL <button class="cursor-pointer text-sm"><i class="fa-solid fa-arrow-up ml-1"></i> <i class="fa-solid fa-arrow-down"></i></button></span>
                    </div>
                    <div class="w-2/5 text-center">
                        <span>PRICE <button class="cursor-pointer text-sm"><i class="fa-solid fa-arrow-up ml-1 "></i> <i class="fa-solid fa-arrow-down"></i></button></span>
                    </div>
                </div>

                <x-flight-info-card />
                <x-flight-info-card />
                <x-flight-info-card />
                <x-flight-info-card />
                <x-flight-info-card />

            </div>
            {{--   section right div ends here--}}
        </section>




</x-layout>
