<x-layout>
    <!-- Put this part before </body> tag -->

    <input type="checkbox" id="my-modal-3" class="modal-toggle"/>
    <div class="modal">
        <div class="modal-box bg-white relative">
            <div
                class=" absolute right-2 top-2 bg-info text-white flex justify-center rounded-full text-center drop-shadow-2xl px-3 py-1.5 ">
                <label for="my-modal-3">✕</label>
            </div>

            <h3 class="text-lg font-bold">Congratulations random Internet user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </div>
    </div>

    <section
        class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-col sm:flex-col flex-col justify-center w-full 2xl:px-52 xl:px-20 lg: px-2 md:px-20 sm:px-20 px-9 pt-24">
        {{--    section left div starts here--}}
        <div class="2xl:w-3/4 xl:w-3/4 lg:w-3/4 md:w-full sm:w-full w-full bg-white drop-shadow-2xl rounded-xl p-5">

            <div>
                <span class="text-lg text-black font-semibold">PAYMENT DETAILS </span>
            </div>

            <div>
                <div class="border-2 border-info rounded-2xl px-5 pb-10">

                    <div class="bg-gray-100 border-b-2 border-b-gray-300 px-4 py-3 rounded-md mt-5">
                        <span class="text-black ">Credit or Debit Card</span>
                    </div>

                    <div class=" w-full mt-6  mb-2 text-md rounded-lg bg-blue-300 text-black py-4 px-2">
                     <span class=" w-full mr-2  ">We also accept International Cards for payments on transaction.</span>
                    </div>

                    <div class="mt-2 ml-5">

                        <img src="	https://cloud-travel.co.uk/live_app/images/payment-cards.png" alt="">
                    </div>

                    <div class="flex justify-between pl-5  2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full">
                      <div class="flex flex-col mt-5 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-2/5 w-full">
                          <label for="dob" class=" font-semibold text-gray-800 text-sm">CARD NUMBER</label>
                          <input type="number"  placeholder="Enter Number" class="w-full rounded-md text-sm text-black mt-2">
                      </div>

                      <div class="flex flex-col mt-5 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-2/5 w-full">
                          <label for="dob" class=" font-semibold text-gray-800 text-sm">NAME ON CARD</label>
                          <input type="text"  placeholder="Enter Name" class="w-full rounded-md text-sm text-black mt-2">
                      </div>
                  </div>

                    <div class="flex justify-between pl-5 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full">
                      <div class="flex flex-col mt-5 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-2/5 w-full">
                          <label for="dob" class=" font-semibold text-gray-800 text-sm">EXPIRY DATE</label>
                          <input type="number"  placeholder="MM/YY" class="w-full rounded-md text-sm text-black mt-2">
                      </div>

                      <div class="flex flex-col mt-5 2xl:w-2/5 xl:w-2/5 lg:w-2/5 md:w-2/5 sm:w-2/5 w-full">
                          <label for="dob" class=" font-semibold text-gray-800 text-sm">CVV</label>
                          <input type="text"  class="w-full rounded-md text-sm text-black mt-2">
                      </div>
                  </div>

                    <div class="mt-3 pl-5">
                        <button  class="btn btn-success" >Pay &#8377 256.85</button>
                    </div>

                </div>


                <div class="border-2 border-info rounded-2xl px-5 pb-10 mt-4">

                    <div class="bg-gray-100 border-b-2 border-b-gray-300 px-4 py-3 rounded-md mt-5">
                        <span class="text-black ">Net Banking</span>
                    </div>

                    <div class="mt-3">
                        <span class="text-black font-semibold text-md  ml-5" >Popular Banks</span>
                    </div>

                    <div class="flex  px-5 w-full justify-between 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col">

                     <div class="flex justify-between 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full  2xl:pr-5 xl:pr-5 lg:pr-5 md:pr-5 sm:pr-0 pr-0 ">
                         <div class="flex justify-center border-2 border-blue-200 rounded-md px-12  w-2/5 py-6">
                             <input type="radio">
                             <span class="text-black font-semibold text-md ml-1 mr-1">SBI</span>
                             <img src="https://cloud-travel.co.uk/live_app/images/sbi.png" alt="">
                         </div>
                         <div class="flex justify-center border-2 border-blue-200 rounded-md px-12  w-2/5 py-6">
                             <input type="radio">
                             <span class="text-black font-semibold text-md ml-1 mr-1">ICICI</span>
                             <img src="	https://cloud-travel.co.uk/live_app/images/icici.png" alt="">
                         </div>
                     </div>

                       <div class="flex justify-between 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-4 mt-4 2xl:pl-5 xl:pl-5 lg:pl-5 md:pl-5 sm:pl-0 pl-0">
                           <div class="flex justify-center border-2 border-blue-200 rounded-md px-12  w-2/5 py-6">
                               <input type="radio">
                               <span class="text-black font-semibold text-md ml-1 mr-1">HDFC</span>
                               <img src="	https://cloud-travel.co.uk/live_app/images/HDFC.png" alt="">
                           </div>
                           <div class="flex justify-center border-2 border-blue-200 rounded-md px-12  w-2/5 py-6">
                               <input type="radio">
                               <span class="text-black font-semibold text-md ml-1 mr-1">AXIS</span>
                               <img src="https://cloud-travel.co.uk/live_app/images/AXIS.png" alt="">
                           </div>
                       </div>
                    </div>

                    <div class="mt-5 px-5">
                        <span class="text-gray-800 ">By clicking on Pay , I agree to accept the <a class="text-blue-700" href="">Booking Terms</a> & goibibo General <a
                                class="text-blue-700" href="">Terms of use and services</a></span>
                    </div>

                    <div class="mt-3 pl-5">
                        <button  class="btn btn-success" >Pay &#8377 256.85</button>
                    </div>

                </div>


                <div class="border-2 border-info rounded-2xl px-5 pb-10 mt-4">

                    <div class="bg-gray-100 border-b-2 border-b-gray-300 px-4 py-3 rounded-md mt-5">
                        <span class="text-black ">Paypal </span>
                    </div>

                    <div class="flex justify-between mt-5 ml-3 ">
                        <div>
                            <input type="radio">
                            <span class="text-black font-semibold text-md ml-2">PAYPAL</span>
                        </div>
                        <div>
                            <img  class="w-40" src="	https://cloud-travel.co.uk/live_app/images/paypal.png" alt="">
                        </div>



                    </div>

                    <div class="mt-3 ml-3">
                        <button  class="btn btn-success" >Pay &#8377 256.85</button>
                    </div>

                </div>

            </div>

        </div>
        {{--    section left div ends here--}}

        {{--    section right div starts here--}}
        <div class=" sticky top-0 2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-full sm:w-full w-full  bg-white drop-shadow-2xl rounded-xl 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-2 sm:mt-2 mt-2 2xl:ml-5 xl:ml-5 lg:ml-5 md:ml-0 sm:ml-0 ml-0 h-min p-5">

            <div class="flex flex-col pb-5 border-b-2 border-b-gray-200">
                <span class="text-black font-semibold text-xl ">FARE SUMMARY</span>
                <span class="mt-2 text-sm ">Travelers 1 Adult</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Passenger Type</span>
                <span class="text-black text-md font-semibold">Adult</span>
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

            <div class="flex flex-col pb-5 border-b-2 border-b-gray-200">
                <span class="mt-2 text-sm ">Travelers 1 Child</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Passenger Type</span>
                <span class="text-black text-md font-semibold">Child</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Base Fare x 1</span>
                <span class="text-black text-md font-semibold">&#8377 135.58</span>
            </div>
            <div class="flex justify-between mt-1.5">
                <span class="text-black text-md">Fee & Surcharge x 1</span>
                <span class="text-black text-md font-semibold">&#8377 105.58</span>
            </div>
            <div class="flex justify-between mt-1.5 pb-3 border-b-2 border-b-gray-200 ">
                <span class="text-black text-md">Price 1 child(s)</span>
                <span class="text-black text-md font-semibold">&#8377 95.58</span>
            </div>

            <div class="flex flex-col pb-5 border-b-2 border-b-gray-200">
                <span class="mt-2 text-sm ">Travelers 1 Infant</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Passenger Type</span>
                <span class="text-black text-md font-semibold">Infant</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Base Fare x 1</span>
                <span class="text-black text-md font-semibold">&#8377 95.58</span>
            </div>
            <div class="flex justify-between mt-1.5">
                <span class="text-black text-md">Fee & Surcharge x 1</span>
                <span class="text-black text-md font-semibold">&#8377 75.58</span>
            </div>
            <div class="flex justify-between mt-1.5 pb-3 border-b-2 border-b-gray-200 ">
                <span class="text-black text-md">Price 1 infant(s)</span>
                <span class="text-black text-md font-semibold">&#8377 95.58</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md font-bold">Total</span>
                <span class="text-black text-md text-red-700 font-semibold">&#8377 1505.58</span>
            </div>


        </div>
        {{--    section right div ends here--}}
    </section>



</x-layout>
