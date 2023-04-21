<x-layout>


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


                         <div class=" flex flex-row w-full p-1.5 bg-white text-black rounded-lg flex mt-5 drop-shadow-xl" >

                                 <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2  sm:w-1/2 w-1/2 ">
                                       <div class="w-full  p-3 ">
                                   <div class="flex">
                                       <div>
                                           <img class="w-9 h-6 mt-2 mr-3 object-cover" src="	https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                                       </div>
                                       <div class="flex-flex-col">
                                           <span class="text-lg text-black ">EK</span> <br>
                                           <span class="text-gray-700 text-sm">EK-513</span>
                                       </div>
                                   </div>
                                   <div class="flex 2xl:mt-16 xl:mt-16 lg:mt-16 md:mt-16 sm:mt-20 mt-20">
                                       <img class="w-9 h-6 mt-2 mr-3 object-cover" src="	https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                                       <div class="flex-flex-col">
                                           <span class="text-lg text-black ">EK</span> <br>
                                           <span class="text-gray-700 text-md">EK-516</span>
                                       </div>
                                   </div>
                               </div>
                                      <div class="w-full  p-3  2xl:-mt-0 xl:-mt-0 lg:-mt-0  md:-mt-0 sm:-mt-36 -mt-36 ">
                                   <div class="flex flex-col">
                                       <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure text-xs text-gray-700"></i> <span>02 May 2023</span></span>
                                       <span class="font-semibold text-lg text-black">04:15</span>
                                       <span class="text-gray-700 text-md">DEL</span>
                                   </div>
                                   <div class="flex flex-col 2xl:mt-10  xl:mt-10  lg:mt-10  md:mt-10 sm:mt-16 mt-16">
                                       <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>09 May 2023</span></span>
                                       <span class="font-semibold text-lg text-black">09:45</span>
                                       <span class="text-gray-700 text-md">DXB</span>
                                   </div>
                               </div>
                                 </div>

                                 <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2">

                                   <div class="flex 2xl:w-3/5 xl:w-3/5 lg:w-3/5 md:w-3/5 sm:w-full w-full  ">
                                        <div class="w-1/2   p-2 -ml-5">
                                            <div class="flex flex-col">
                                                <span class="font-semibold text-sm text-gray-800">0D 03h 05m </span>
                                                <span class="text-gray-700 text-xs">Non Stop </span>
                                            </div>
                                            <div class="flex flex-col mt-16">
                                                <span class="font-semibold text-sm text-gray-800">0D 03h 05m </span>
                                                <span class="text-gray-700 text-xs">Non Stop </span>
                                            </div>
                                        </div>

                                        <div class="w-1/2 p-2 ">

                                        <div class="flex flex-col relative">
                                            <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>02 May 2023</span></span>
                                            <span class="font-semibold text-lg text-black">04:15</span>
                                            <span class="text-gray-700 text-md">DEL</span>
                                            <div class=" w-8 h-8  pt-1 pl-2 rounded-full bg-white absolute top-3 -left-10 drop-shadow-xl">
                                                <span><i class="fa-solid fa-arrow-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-10 relative">
                                            <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>09 May 2023</span></span>
                                            <span class="font-semibold text-lg text-black">09:45</span>
                                            <span class="text-gray-700 text-md">DXB</span>
                                            <div class=" w-8 h-8  pt-1 pl-2 rounded-full bg-white absolute top-3 -left-10 drop-shadow-xl">
                                                <span><i class="fa-solid fa-arrow-left"></i></span>
                                            </div>
                                        </div>

                                    </div>
                                   </div>

                                   <div class="flex 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-full w-full">
                                       <div class=" 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2 sm:w-full w-full   text-center">
                                           <div class="flex flex-col pt-6">
                                               <span class="text-black font-semibold text-2xl">&#8377 356.45</span>
                                               <button class="bg-info  py-1.5 rounded-md mt-2 text-gray-100  w-24 m-auto">Book Now </button>
                                               <a href="#" class="text-info text-xs mt-6"> View Flight Details </a>
                                           </div>
                                       </div>
                                   </div>

                            </div>

                         </div>

                     <div class=" flex flex-row w-full p-1.5 bg-white text-black rounded-lg flex mt-5 drop-shadow-xl" >

                         <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2  sm:w-1/2 w-1/2 ">
                             <div class="w-full  p-3 ">
                                 <div class="flex">
                                     <div>
                                         <img class="w-9 h-6 mt-2 mr-3 object-cover" src="	https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                                     </div>
                                     <div class="flex-flex-col">
                                         <span class="text-lg text-black ">EK</span> <br>
                                         <span class="text-gray-700 text-sm">EK-513</span>
                                     </div>
                                 </div>
                                 <div class="flex 2xl:mt-16 xl:mt-16 lg:mt-16 md:mt-16 sm:mt-20 mt-20">
                                     <img class="w-9 h-6 mt-2 mr-3 object-cover" src="	https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirEK.gif" alt="">
                                     <div class="flex-flex-col">
                                         <span class="text-lg text-black ">EK</span> <br>
                                         <span class="text-gray-700 text-md">EK-516</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="w-full  p-3  2xl:-mt-0 xl:-mt-0 lg:-mt-0  md:-mt-0 sm:-mt-36 -mt-36 ">
                                 <div class="flex flex-col">
                                     <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure text-xs text-gray-700"></i> <span>02 May 2023</span></span>
                                     <span class="font-semibold text-lg text-black">04:15</span>
                                     <span class="text-gray-700 text-md">DEL</span>
                                 </div>
                                 <div class="flex flex-col 2xl:mt-10  xl:mt-10  lg:mt-10  md:mt-10 sm:mt-16 mt-16">
                                     <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>09 May 2023</span></span>
                                     <span class="font-semibold text-lg text-black">09:45</span>
                                     <span class="text-gray-700 text-md">DXB</span>
                                 </div>
                             </div>
                         </div>

                         <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-1/2">

                             <div class="flex 2xl:w-3/5 xl:w-3/5 lg:w-3/5 md:w-3/5 sm:w-full w-full  ">
                                 <div class="w-1/2   p-2 -ml-5">
                                     <div class="flex flex-col">
                                         <span class="font-semibold text-sm text-gray-800">0D 03h 05m </span>
                                         <span class="text-gray-700 text-xs">Non Stop </span>
                                     </div>
                                     <div class="flex flex-col mt-16">
                                         <span class="font-semibold text-sm text-gray-800">0D 03h 05m </span>
                                         <span class="text-gray-700 text-xs">Non Stop </span>
                                     </div>
                                 </div>

                                 <div class="w-1/2 p-2 ">

                                     <div class="flex flex-col relative">
                                         <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>02 May 2023</span></span>
                                         <span class="font-semibold text-lg text-black">04:15</span>
                                         <span class="text-gray-700 text-md">DEL</span>
                                         <div class=" w-8 h-8  pt-1 pl-2 rounded-full bg-white absolute top-3 -left-10 drop-shadow-xl">
                                             <span><i class="fa-solid fa-arrow-right"></i></span>
                                         </div>
                                     </div>
                                     <div class="flex flex-col mt-10 relative">
                                         <span class="text-gray-700 text-xs"><i class="fa-solid fa-plane-departure"></i> <span>09 May 2023</span></span>
                                         <span class="font-semibold text-lg text-black">09:45</span>
                                         <span class="text-gray-700 text-md">DXB</span>
                                         <div class=" w-8 h-8  pt-1 pl-2 rounded-full bg-white absolute top-3 -left-10 drop-shadow-xl">
                                             <span><i class="fa-solid fa-arrow-left"></i></span>
                                         </div>
                                     </div>

                                 </div>
                             </div>

                             <div class="flex 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-full w-full">
                                 <div class=" 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2 sm:w-full w-full   text-center">
                                     <div class="flex flex-col pt-6">
                                         <span class="text-black font-semibold text-2xl">&#8377 356.45</span>
                                         <button class="bg-info  py-1.5 rounded-md mt-2 text-gray-100  w-24 m-auto">Book Now </button>
                                         <a href="#" class="text-info text-xs mt-6"> View Flight Details </a>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>
                 </div>
{{--   section right div ends here--}}
    </section>











{{--footer here--}}
    <div class="w-auto mt-9 rounded-t-3xl h-auto  bg-info  p-12">
        <div class="w-auto bg-white h-auto w-3/5 rounded-xl m-auto p-6 ">
            <div>
                <span class="text-info text-xl font-semibold "> COMPANY USEFUL LINKS</span>
            </div>
            <div class="mt-3">
                <a href="" class="mr-5"> Home</a>
                <a href="" class="mr-5"> About Us</a>
                <a href="" class="mr-5"> Customer Service</a>
                <a href="" class="mr-5"> Contact</a>
                <a href="" class="mr-5"> Privacy Policy </a>
                <a href="" class="mr-5"> Travel Conditions </a>
                <a href="" class="mr-5"> Term of use</a>
                <a href="" class="mr-5"> Cookies</a>
            </div>


            <div class="flex 2xl:flex-row  xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col mt-12 w-full ">

                <div class=" 2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-full sm:-w-full w-full sm:mt-12 mt-12 flex flex-col">
                    <span class="text-info text-xl font-semibold "> KEEP UP TO DATE</span>
                    <span class="text-xs"> Want great offers, Trips and News vie email?</span>
                    <div class="mt-8">
                        <input type="email" class="input rounded bg-transparent w-1/2 outline-none border-2 border-gray-400 mr-2" placeholder="Enter your email address">
                        <button class=" bg-yellow-500 p-3  text-black rounded-md ">Subscribe</button>
                    </div>
                </div>

                <div class="2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-full sm:-w-full w-full sm:mt-12 mt-12 ">
                    <span class="text-info text-xl font-semibold "> KEEP IN TOUCH</span>
                    <div class="mt-2 flex">
                        <div class="bg-info text-white flex p-3 mr-3 rounded-full"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="bg-info text-white flex p-3 mr-3 rounded-full"><i class="fa-brands fa-twitter"></i></div>
                        <div class="bg-info text-white flex p-3 mr-3 rounded-full"><i class="fa-brands fa-youtube"></i></div>
                        <div class="bg-info text-white flex p-3 mr-3 rounded-full"><i class="fa-brands fa-instagram"></i></div>
                    </div>
                    <div>
                        <div class="mt-3"><img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/credit_logo.png" alt=""></div>
                    </div>
                </div>

                <div class=" 2xl:w-1/3 xl:w-1/3 lg:w-1/3 md:w-full sm:-w-full w-full sm:mt-12 mt-12">
                    <span class="text-info text-xl font-semibold "> CONTACT US</span>
                    <div class="mt-2 flex flex-col">

                        <div class="flex ">
                            <div class="bg-info h-full w-auto  text-white flex p-3 rounded-full"><i class="fa-solid fa-phone"></i></div>
                            <div class="ml-4">
                                <span >Customer Care Helpline No.</span><br>
                                <span class="text-black font-semibold">0203 500 0000</span>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="bg-info h-full w-auto text-white flex p-3 rounded-full"><i class="fa-solid fa-envelope"></i></div>
                            <div class="ml-4">
                                <span >Email Us</span><br>
                                <span class="text-black font-semibold">info@cloudtravel.co.uk</span>
                            </div>
                        </div>


                    </div>
                </div>

            </div>



        </div>
    </div>

    {{--    copyright--}}
    <div class="w-full h-10 text-center bg-gray-500 text-white">

        <div class=" p-5 bg-gray-500 text-white">
            <span class="mt-5">&#169 Copyright 2023 | cloudtravel.co.uk All Rights Reserved </span>
        </div>
    </div>




</x-layout>
