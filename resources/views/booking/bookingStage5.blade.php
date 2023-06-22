<x-layout>

    <div class="w-full h-max ">
        <div class="w-full h-96 bg-no-repeat bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">

        </div>
    </div>

    <div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto bg-white ">
        <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col mt-10">
            <div class="lg:w-3/4  md:w-3/4 sm:w-3/4  w-full h-max bg-sky-100 py-4 px-12">
                <div class="w-full flex gap-8">
                    <div class="p-4 flex flex-col">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-sky-500 text-black flex justify-center m-auto ">
                            <span class="m-auto">1</span>
                        </div>
                        <span class="text-xs text-gray-500 mt-2">Passenger</span>
                    </div>
                    <div class="p-4 flex flex-col">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-sky-500 text-black flex justify-center m-auto ">
                            <span class="m-auto">2</span>
                        </div>
                        <span class="text-xs text-gray-500 mt-2">Your Deails</span>
                    </div>
                    <div class="p-4 flex flex-col">
                        <div class="w-8 h-8 rounded-full bg-sky-500 border-none text-white flex justify-center m-auto ">
                            <span class="m-auto">3</span>
                        </div>
                        <span class="text-xs text-gray-500 mt-2">Book</span>
                    </div>

                </div>

                <div class="w-full px-3 py-1.5 bg-gray-200 ">
                    <span class="text-lg text-black font-semibold">Card Payment</span>
                </div>

                <div class="w-full flex py-6 border-b-2 border-b-gray-200">
                    <div class="w-4/5">
                        <div class="flex flex-wrap">
                            <span class="text-black font-semibold text-lg">Important Information</span>
                        </div>
                        <div class="flex flex-wrap">
                            <span class="text-black font-semibold text-sm">By clicking to confirm your booking, your are agreeing to the following:</span>
                        </div>
                        <div class="flex flex-wrap">
                            <span class="text-black font-normal text-xs">Holiday availability and price are subjected to change</span>
                        </div>


                    </div>
                    <div class="w-1/5 h-12 ">
                      <img class="w-full h-full object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOWYsllCSzvfl1ojLGy9_a-sUKCJHohLJJBQ&usqp=CAU" alt="">
                    </div>
                </div>

                <div class="w-full py-4 border-b-2 border-gray-200">

                    <div class="w-full">
                        <div class=" w-full mt-4">
                            <span class="text-black text-sm font-semibold">Card Number</span>
                            <input type="text" id="number" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="1234 5678 9101" required>
                        </div>
                    </div>
                    <div class="w-full flex gap-6">
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">Expiry Date</span>
                            <input type="date" id="phone" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="mm/yy" required>
                        </div>
                        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full mt-4">
                            <span class="text-black text-sm font-semibold">CVC / CVV</span>
                            <input type="number" id="email" class=" mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-gray-300 block w-full py-2 px-3" placeholder="123" required>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-12">
                    <div class="w-1/2">
                        <a href="{{route('bookingStage5')}}" class="rounded-md bg-sky-500 text-white py-2 px-20 font-semibold text-lg"> <i class="fa-solid fa-lock mr-2"></i>Pay ₹349.15</a>
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
