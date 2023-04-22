<x-layout>
    <!-- Put this part before </body> tag -->

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

    <section
        class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-col sm:flex-col flex-col justify-center w-full 2xl:px-52 xl:px-20 lg: px-2 md:px-20 sm:px-20 px-9 pt-24">
        {{--    section left div starts here--}}
        <div class="2xl:w-3/4 xl:w-3/4 lg:w-3/4 md:w-full sm:w-full w-full bg-white drop-shadow-2xl rounded-xl p-5">

            <div class="py-3 border-b-2 border-b-gray-100 ">
                <span class="text-lg text-black font-semibold">TICKET DETAILS </span>
            </div>

            <div
                class="border-b-2 border-b-gray-100  2xl:flex xl:flex lg:flex md:flex sm:flex flex-wrap block justify-between py-4">
                <span class="text-md text-gray-700 "><i class="fa-solid fa-plane-departure mr-2 text-sm"></i>Delhi Indira Gandhi Intl (DEL) - Dubai Intl Arpt (DXB) 26 Apr 2023</span>
                <label for="my-modal-3"  class="  bg-green-600 px-1 py-0.5 ml-2 text-gray-100 rounded-md text-xs">Baggage and Fare
                    Rules
                </label>

                <!-- The button to open modal -->
            </div>

            <div
                class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col justify-between mt-4 border-b-2 border-b-gray-100 pb-4">

                <div
                    class="flex 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2  sm:w-1/2 w-full 2xl:justify-start xl:justify-start lg:justify-start md:justify-start sm:justify-start justify-between ">
                    <div class="flex flex-col">
                        <img class="w-9 h-6 object-cover"
                             src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAirUL.gif" alt="">
                        <span class="text-xs text-gray-400 mt-3">UL</span>
                        <span class="text-xs text-gray-400 mt-0.5">Economy</span>
                        <span class="text-xs text-gray-400 mt-0.5">(UL-192)</span>
                        <span class="text-xs text-gray-400 mt-0.5">(Aircraft-192)</span>
                        <span
                            class="2xl:text-md xl:text-md lg:text-md md:text-md sm:text-md text-xs text-gray-400 2xl:mt-6 xl:mt-6 lg:mt-6 md:mt-6 sm:mt-6 mt-2 font-normal"><i
                                class="fa-solid fa-bag-shopping text-sm"></i> 30K Check-In, 1P Cabin</span>
                    </div>

                    <div class="flex flex-col 2xl:ml-24 xl:ml-24 lg:ml-24 md:ml-24 sm:ml-0 ml-0  mt-3">
                        <span class="text-xs text-gray-800 ">Wednesday Apr 26 2023</span>
                        <span class="text-xl text-black font-semibold">DEL 05:15</span>
                        <span class="text-xs text-gray-400 2xl:mt-4 xl:mt-4 lg:mt-4 md:mt-4 sm:mt-4 mt-1 ">Delhi Indira Gandhi Intl (DEL)</span>
                    </div>
                </div>
                <div
                    class="flex 2xl:w-1/2  xl:w-1/2  lg:w-1/2  md:w-1/2  sm:w-1/2 w-full 2xl:justify-center xl:justify-center lg:justify-center md:justify-center sm:justify-center justify-between">
                    <div class="flex flex-col text-center mt-4 2xl:mr-24 xl:mr-24 lg:mr-24 md:mr-24 sm:mr-0 mr-0">
                        <span class="text-red-600 text-sm"><i class="fa-solid fa-plane-departure"></i></span>
                        <span class="text-md text-black font-semibold">03h 35m</span>
                        <span class="text-xs text-gray-400 ">Flight Duration</span>
                    </div>

                    <div class="flex flex-col ml-5 mt-3">
                        <span class="text-xs text-gray-800 ">Wednesday Apr 26 2023</span>
                        <span class="text-xl text-black font-semibold">CMB 08:50</span>
                        <span class="text-xs text-gray-400 2xl:mt-4 xl:mt-4 lg:mt-4 md:mt-4 sm:mt-4 mt-1 ">Dubai Intl Arpt (DXB)</span>
                    </div>
                </div>

            </div>

            <div class="flex flex-col border-b-2 border-b-gray-100 p-4">
                <span class="bg-yellow-400 text-xs p-0.5 rounded-lg m-auto text-black font-semibold ">CMB 09h 35m Layover</span>
                <span class="m-auto text-xs text-black  mt-1">Re-Checkin your baggage</span>
            </div>


        </div>

        {{--    section left div ends here--}}


        {{--    section right div starts here--}}
        <div
            class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-full sm:w-full w-full bg-white drop-shadow-2xl rounded-xl 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-2 sm:mt-2 mt-2 p-5">
            <div class="flex flex-col pb-5 border-b-2 border-b-gray-200">
                <span class="text-black font-semibold text-xl ">FARE SUMMARY</span>
                <span class="mt-2 text-sm ">Travelers 1 Adult</span>
            </div>

            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Base Fare x 1</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-1.5">
                <span class="text-black text-md">Fee & Surcharge x 1</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-1.5 pb-3 border-b-2 border-b-gray-200 ">
                <span class="text-black text-md">Price 1 adult(s)</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md font-bold">Total</span>
                <span class="text-black text-md text-red-700 font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-center mt-5">
                <a class="w-full bg-info rounded-md text-gray-100 text-center p-3 text-xl  " href="{{route('passengerDetails')}}">Book Now</a>
            </div>


        </div>
        {{--    section right div ends here--}}
    </section>



</x-layout>
