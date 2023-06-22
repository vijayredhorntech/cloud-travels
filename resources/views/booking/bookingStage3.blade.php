<x-layout>

    <div class="w-full h-max ">
        <div class="w-full h-96 bg-no-repeat bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">

        </div>
    </div>

    <div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto bg-sky-100 ">
        <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col mt-10">
            <div class="lg:w-3/4  md:w-3/4 sm:w-3/4  w-full h-max bg-white py-4 px-12">
                 <div class="w-full flex gap-8">
                     <div class="p-4 flex flex-col">
                         <div class="w-8 h-8 rounded-full bg-sky-500 border-none text-white flex justify-center m-auto ">
                                <span class="m-auto">1</span>
                         </div>
                         <span class="text-xs text-gray-500 mt-2">Passengers</span>
                     </div>
                     <div class="p-4 flex flex-col">
                         <div class="w-8 h-8 rounded-full bg-white border-2 border-sky-500 text-black flex justify-center m-auto ">
                                <span class="m-auto">2</span>
                         </div>
                         <span class="text-xs text-gray-500 mt-2">Your Details</span>
                     </div>
                     <div class="p-4 flex flex-col">
                         <div class="w-8 h-8 rounded-full bg-white border-2 border-sky-500 text-black flex justify-center m-auto ">
                                <span class="m-auto">3</span>
                         </div>
                         <span class="text-xs text-gray-500 mt-2">Book</span>
                     </div>

                 </div>
                 <div class="w-full">
                    <span class=" font-semibold text-black text-lg ">Passenger Details</span>
                </div>

                 <div class="w-full">
                    <span class=" font-normal text-gray-500 text-xs">(First and Last name as on passport)</span>
                </div>

                 <div class="w-full mt-4">
                    <span class=" font-semibold text-black text-lg ">Lead Passenger</span>
                </div>

                 <div class="w-11/12 bg-green-200 py-1 px-4 mt-2 rounded-sm">
                    <span class=" font-semibold text-black text-xs">We can only discuss the booking with the lead or authorised passengers.</span>
                </div>

                <div class="w-full py-4 border-b-2 border-gray-200">
                    <div class="lg:w-1/5 md:w-1/3 sm:w-1/2 w-full">
                        <span class="text-black text-sm font-semibold">Title</span>
                        <select id="countries" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3 ">
                            <option selected>Mr.</option>
                            <option value="US">Mrs.</option>

                        </select>
                    </div>

                    <div class="w-full flex gap-8">
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">First Name</span>
                            <input type="text" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="First Name" required>
                        </div>
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">Last Name</span>
                            <input type="text" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="w-full mt-4 ">
                       <div class="w-full">
                           <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-sky-600 rounded focus:ring-0 mr-2 ">
                           <span class="text-gray-400 font-normal m-auto">Apply same surname to all passengers</span>
                       </div>
                    </div>

                    <div class="w-1/2 flex">
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">Date of Birth</span>
                            <input type="date" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="First Name" required>
                        </div>
                    </div>

                </div>

                <div class="w-full mt-10">
                    <span class=" font-semibold text-black text-lg ">Passenger 2</span>
                </div>

                <div class="w-full py-4 border-b-2 border-gray-200">
                    <div class="lg:w-1/5 md:w-1/3 sm:w-1/2 w-full">
                        <span class="text-black text-sm font-semibold">Title</span>
                        <select id="countries" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3 ">
                            <option selected>Mr.</option>
                            <option value="US">Mrs.</option>

                        </select>
                    </div>

                    <div class="w-full flex gap-8">
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">First Name</span>
                            <input type="text" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="First Name" required>
                        </div>
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">Last Name</span>
                            <input type="text" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="w-1/2 flex">
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">Date of Birth</span>
                            <input type="date" id="first_name" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="First Name" required>
                        </div>
                    </div>

                    <div class="w-full mt-4 ">
                        <div class="w-full">
                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-sky-600 rounded focus:ring-0 mr-2 ">
                            <span class="text-gray-400 font-normal m-auto">Authorise this passenger to discuss this booking with On the Beach (Maximum 2 passenger)</span>
                        </div>
                    </div>

                </div>

                <div class="w-full mt-8">
                    <div class="w-full">
                        <span class="font-semibold text-black text-xl ">Disability support</span>
                    </div>
                    <div class="w-full mt-4 ">
                        <div class="w-full">
                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-white border-sky-600 rounded focus:ring-0 mr-2 ">
                            <span class="text-black font-semibold m-auto">Does anyone in your party require any disability support on your flight, with transfer or at your hotel.</span>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-12">
                    <div class="w-1/2">
                       <button class="rounded-md bg-sky-500 text-white py-2 w-full font-semibold text-lg">Continue</button>
                    </div>

                </div>

            </div>
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/4 w-full bg-white border-2 border-gray-300">

                <x-common.price-details></x-common.price-details>

            </div>
        </div>

    </div>
    <!-- Button to open the modal -->






    {{--newslatter--}}
    <x-common.news-letter></x-common.news-letter>

</x-layout>
