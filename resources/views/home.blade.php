<x-layout>

    <div class="carousel w-full h-96 lg:inline-flex md:inline-flex sm:inline-flex hidden">
        <div id="slide1"  class="carousel-item relative w-full ">
            <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/book-holiday.jpg" class="w-full object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-0 right-0 top-1/2">
                <a href="#slide4" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500  ">❮</a>
                <a href="#slide2" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered border-gray-500  ">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/flight-discount2.jpg" class="w-full object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-0 right-0 top-1/2">
                <a href="#slide1" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500 ">❮</a>
                <a href="#slide3" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img src="https://cloud-travel.co.uk/live_flight/frontend/assets/images/book-holiday.jpg" class="w-full object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-0 right-0 top-1/2">
                <a href="#slide2" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500">❮</a>
                <a href="#slide4" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/flight-discount2.jpg" class="w-full object-cover" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-0 right-0 top-1/2">
                <a href="#slide3" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500">❮</a>
                <a href="#slide1" class="btn  bg-transparent text-white hover:bg-transparent hover-bordered   border-gray-500">❯</a>
            </div>
        </div>
    </div>



    {{--    hotel search --}}
    <div class="w-4/5 m-auto h-auto  bg-info 2xl:flex-row xl:flex-row  lg:flex-row md:flex-row sm:flex-col flex-col flex justify-center align-baseline ">
        <button class="btn text-white bg-transparent border-transparent pl-12 pr-12 text-lg hover:bg-white hover:text-info hover:border-transparent mt-1 mb-1 rounded-full">FLIGHTS</button>
        <button class="btn text-white bg-transparent border-transparent pl-12 pr-12 text-lg hover:bg-white hover:text-info hover:border-transparent mt-1 mb-1 rounded-full">HOTELS</button>
        <button class="btn text-white bg-transparent border-transparent pl-12 pr-12 text-lg hover:bg-white hover:text-info hover:border-transparent mt-1 mb-1 rounded-full">FLIGHTS & HOTELS</button>
        <button class="btn text-white bg-transparent border-transparent pl-12 pr-12 text-lg hover:bg-white hover:text-info hover:border-transparent mt-1 mb-1 rounded-full">VISA</button>
    </div>

    {{--    flight type--}}
    <div class="w-4/5 m-auto h-auto flex flex-col justify-center ">

        <div class="mt-3 flex lg:flex-row md:flex-row sm:flex-row">
            <button class="btn btn-sm text-xs bg-transparent border-info hover:bg-yellow-500 hover:text-white hover:border-transparent text-info mr-2">One Way</button>
            <button class="btn btn-sm text-xs bg-transparent border-info hover:bg-yellow-500 hover:text-white hover:border-transparent text-info mr-2">Rounded Trip</button>
            <button class="btn btn-sm text-xs bg-transparent border-info hover:bg-yellow-500 hover:text-white hover:border-transparent text-info">Multi City</button>

        </div>

        <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row  2xl:justify-between xl:justify-between lg:justify-between md:justify-between sm:flex-col flex-col sm:justify-between">

            <div class="mt-3">
                <label for="leavingFrom" class="text-black">Leaving From</label><br>
                <input name="leavingFrom" type="text" placeholder="(IXC) | Chandigarh Airport" class="input rounded bg-transparent border-gray-400 2xl:w-96 xl:w-64 lg:w-64 md:w-64 sm:w-full  w-full text-black">
            </div>
            <div class="2xl:mt-3 xl:mt-3 lg:mt-3 md:mt-3 sm:mt-0 flex justify-center">
                <button class="btn btn-sm 2xl:mt-8 xl:mt-8 lg:mt-8 md:mt-8 sm:mt-4 mt-4 bg-transparent rounded-full border-gray-300"> <i class="fa-solid fa-left-right text-2xl" ></i></button>
            </div>

            <div class="mt-3 flex lg:flex-row flex-row">

                <div class="2xl:mr-5 xl:mr-5 lg:mr-5 md:mr-2 sm:mr-2 mr-1 w-full">
                    <label for="arriveTo" class="text-black">Arrive To</label><br>
                    <input name="arriveTo" type="text" placeholder="(BOM) | Chhatrapati Shivji Airport" class="input rounded bg-transparent border-gray-400 2xl:w-96 xl:w-64 lg:w-64 md:w-64 sm:w-full w-full text-black">
                </div>
                <div class="w-full">
                    <label for="departureDate" class="text-black">Departure Date</label><br>
                    <input name="departureDate" type="date" placeholder="(IXC) | Chandigarh Airport" class="input rounded bg-transparent border-gray-400 2xl:w-96 xl:w-64 lg:w-64 md:w-64 sm:w-full w-full text-black">
                </div>
            </div>
        </div>

        <div class="flex mt-6 2xl:flex-row  flex-wrap justify-between">


            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="adult" class="text-black">Adult (>15)</label><br>
                <input name="adult" type="number" placeholder="1" class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black">
            </div>

            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="youth" class="text-black">Youth (12-15)</label><br>
                <select name="youth" class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black" >
                    <option value="">Youth</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="children" class="text-black">Children (2-11)</label><br>
                <select name="children" class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black" >
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>

            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="infant" class="text-black">Infant (2)</label><br>
                <select name="infant" class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black" >
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="travelClass" class="text-black">Travel Class</label><br>
                <select name="travelClass" class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black" >
                    <option value="Economy">Economy</option>
                    <option value="Business">Business</option>
                    <option value="First Class">First Class</option>
                    <option value="Premium Economy">Premium Economy</option>
                    <option value="No Preference">No Preference</option>
                </select>
            </div>
            <div class="mt-3 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <label for="travelClass" class="text-black">Currency</label><br>
                <select name="currency"
                        class="input rounded bg-transparent border-gray-400 2xl:w-64 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full  text-black">
                    <option value="GBP" selected>GBP</option>
                    <option value="INR">INR</option>
                </select>
            </div>

            <div class="mt-3 2xl:w-52 xl:w-80 lg:w-64 md:w-52 sm:w-full w-full">
                <a href="{{route('flightSearch')}}" class="btn mt-6 bg-info border-transparent text-white pl-12 pr-12 hover:bg-transparent hover:border-info hover:text-info ">Search Flight</a>
            </div>
        </div>
    </div>




    {{--    flight offers--}}
    <div class="w-4/5 mt-12 m-auto h-auto text-info flex justify-center align-baseline ">

        <div class="relative h-0.5 mt-4 w-1/6 bg-black ">
            <div class="absolute h-4 w-4 border-black border-2 -top-1.5 -right-4 rotate-45">
            </div>
        </div>


        <div class="ml-12 mr-12">
            <h1 class="lg:text-3xl md:text-2xl sm:text-md text-info font-bold">FLIGHT OFFER</h1>
        </div>

        <div class="relative h-0.5 mt-4 w-1/6 bg-black ">
            <div class="absolute h-4 w-4 border-black border-2 -top-1.5 -left-4 rotate-45">
            </div>
        </div>


    </div>


    {{--flight offers details--}}
    <div class=" text-center  mb-10  xl:w-4/5 lg:w-4/5 md:w-full sm:w-full w-full   mt-12 m-auto  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 text-info flex justify-center align-baseline">

        <div class="carousel carousel-center h-3/5  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-4/5 xl:w-full lg:w-full md:w-4/5 sm:w-4/5 w-4/5 space-x-4   2xl:pl-80   xl:pl-80  lg:pl-80  md:pl-72 sm:pl-80 pl-96 flex justify-center rounded-box">


            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>
            <div class="carousel-item  2xl:h-1/2 xl:h-1/2 lg:h-1/2 md:h-1/2 sm:h-1/4 h-1/4 2xl:w-1/3 xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full   relative">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/cuba.jpg" class="rounded-box w-full h-96 z-10 object-cover " />
                <span class=" text-2xl font-bold absolute top-24 z-50 left-0 bg-teal-900 p-3 w-full text-white">CUBA</span>
                <span class="text-white absolute bottom-6 w-full z-50 left-0">Special offers from <span class="text-yellow-500">&#8377 620</span></span>

            </div>



        </div>

    </div>


    {{--why choose us--}}
    <div class="w-auto m-auto h-auto  bg-info text-center p-12">
        <span  class="text-3xl text-white mt-6">Why choose <span class=" text-3xl text-white font-bold"> Cloud Travel</span></span>


        <div class="w-auto flex  2xl:flew-row   xl:flew-row lg:flex-row md:flex-col sm:flex-col flex-col justify-center mt-6">

            <div class=" bg-white 2xl:w-1/4 xl:w-1/4  lg:w-1/3    md:w-full sm:w-full sm:mt-6  mt-6 rounded-2xl h-auto flex  2xl:flex-row xl:flex-row lg:flex-row  md:flex-row  2xl:mr-5 xl:mr-4 lg:mr-3 md:mr-2 md:mt-2">
                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 flex justify-center align-middle p-5">
                    <img src="https://cloud-travel.co.uk/live_flight/frontend/assets/images/best-price.png" class="object-cover h-16 w-16 " alt="">
                </div>

                <div class="w-3/4 p-5 text-left">
                    <h2 class="text-info mb-2 text-xl">Best price guarantee</h2>
                    <p>Find our lowest price to destinations worldwide guaranteed.</p>
                </div>

            </div>

            <div class=" bg-white 2xl:w-1/4 xl:w-1/4  lg:w-1/3   md:w-full sm:w-full sm:mt-6  mt-6 rounded-2xl h-auto flex  2xl:flex-row xl:flex-row lg:flex-row  md:flex-row  2xl:mr-5 xl:mr-4 lg:mr-3 md:mr-2 md:mt-2">
                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 flex justify-center align-middle p-5">
                    <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/easy-booking.png" class="object-cover h-16 w-16 " alt="">
                </div>

                <div class="w-3/4 p-5 text-left">
                    <h2 class="text-info mb-2 text-xl">Easy booking</h2>
                    <p>
                        Easy booking Search, select and save - the fastest way to book your trip.</p>
                </div>

            </div>

            <div class=" bg-white 2xl:w-1/4 xl:w-1/4  lg:w-1/3   md:w-full sm:w-full sm:mt-6  mt-6 rounded-2xl h-auto flex  2xl:flex-row xl:flex-row lg:flex-row  md:flex-row  2xl:mr-5 xl:mr-4 lg:mr-3 md:mr-2 md:mt-2">
                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 flex justify-center align-middle p-5">
                    <img src="https://cloud-travel.co.uk/live_flight/frontend/assets/images/support.png" class="object-cover h-16 w-16 " alt="">
                </div>

                <div class="w-3/4 p-5 text-left">
                    <h2 class="text-info mb-2 text-xl">24/7 Customer support</h2>
                    <p>Receive free support from our friendly and reliable team.</p>
                </div>

            </div>

        </div>

    </div>


    {{--    holidays--}}
    <div class="w-4/5 mt-12 m-auto h-auto text-info flex justify-center align-baseline ">

        <div class="relative h-0.5 mt-4 w-1/6 bg-black ">
            <div class="absolute h-4 w-4 border-black border-2 -top-1.5 -right-4 rotate-45">
            </div>
        </div>


        <div class="ml-12 mr-12">
            <h1 class=" lg:text-3xl md:text-xl sm:text-sm text-xs text-info font-bold">HOLIDAYS TO INSPIRE YOU…</h1>
        </div>

        <div class="relative h-0.5 mt-4 w-1/6 bg-black ">
            <div class="absolute h-4 w-4 border-black border-2 -top-1.5 -left-4 rotate-45">

            </div>
        </div>


    </div>
    {{--holidays details--}}

    <div class="w-auto flex flex-row justify-center mt-6 mb-6 ">
        <div class="2xl:w-3/5 xl:w-3/5 lg:w-10/12 md:w-10/12 smw-10/12 w-10/12 flex gap-1 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-col flex-col rounded-2xl bg-white justify-center align-middle pb-6 ">


            <div class=" bg-white 2xl:w-1/4 xl:1/4 lg:w-1/4 md:w-1/3   border-info border-2 rounded-2xl sm:mt-6 rounded-2xl h-auto flex flex-col">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/hotel1.jpg" class="w-full object-cover rounded-2xl" alt="">

                <h1 class="text-info font-bold text-md ml-8 mt-6">Selina Cancun Laguna Hotel Zone</h1>
                <div class="flex ml-8 mt-2">
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>

                </div>

                <span class="font-bold text-xl text-red-600 ml-8 mt-2">RS. 5917</span>
                <span class="font-semibold text-md text-green-600 ml-8 mt-1"> FREE CANCELATION</span>
                <button class="btn btn-md btn-info w-1/2 ml-8 mt-2 p-0 mb-5  text-white">Book Now</button>
            </div>
            <div class=" bg-white 2xl:w-1/4 xl:1/4 lg:w-1/4 md:w-1/3   border-info border-2 rounded-2xl sm:mt-6 rounded-2xl h-auto flex flex-col">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/hotel1.jpg" class="w-full object-cover rounded-2xl" alt="">

                <h1 class="text-info font-bold text-md ml-8 mt-6">Selina Cancun Laguna Hotel Zone</h1>
                <div class="flex ml-8 mt-2">
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>

                </div>

                <span class="font-bold text-xl text-red-600 ml-8 mt-2">RS. 5917</span>
                <span class="font-semibold text-md text-green-600 ml-8 mt-1"> FREE CANCELATION</span>
                <button class="btn btn-md btn-info w-1/2 ml-8 mt-2 p-0 mb-5  text-white">Book Now</button>
            </div>
            <div class=" bg-white 2xl:w-1/4 xl:1/4 lg:w-1/4 md:w-1/3   border-info border-2 rounded-2xl sm:mt-6 rounded-2xl h-auto flex flex-col">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/hotel1.jpg" class="w-full object-cover rounded-2xl" alt="">

                <h1 class="text-info font-bold text-md ml-8 mt-6">Selina Cancun Laguna Hotel Zone</h1>
                <div class="flex ml-8 mt-2">
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>

                </div>

                <span class="font-bold text-xl text-red-600 ml-8 mt-2">RS. 5917</span>
                <span class="font-semibold text-md text-green-600 ml-8 mt-1"> FREE CANCELATION</span>
                <button class="btn btn-md btn-info w-1/2 ml-8 mt-2 p-0 mb-5  text-white">Book Now</button>
            </div>
            <div class=" bg-white 2xl:w-1/4 xl:1/4 lg:w-1/4 md:w-1/3  border-info border-2 rounded-2xl sm:mt-6 rounded-2xl h-auto flex flex-col">
                <img src="	https://cloud-travel.co.uk/live_flight/frontend/assets/images/hotel1.jpg" class="w-full object-cover rounded-2xl" alt="">

                <h1 class="text-info font-bold text-md ml-8 mt-6">Selina Cancun Laguna Hotel Zone</h1>
                <div class="flex ml-8 mt-2">
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>
                    <i class="fa-solid fa-star mr-1"></i>

                </div>

                <span class="font-bold text-xl text-red-600 ml-8 mt-2">RS. 5917</span>
                <span class="font-semibold text-md text-green-600 ml-8 mt-1"> FREE CANCELATION</span>
                <button class="btn btn-md btn-info w-1/2 ml-8 mt-2 p-0 mb-5  text-white">Book Now</button>
            </div>

        </div>


    </div>




    {{--    newsletter--}}
    <div class="w-full h-0.5 bg-gray-300">
    </div>
    <div class="mt-6 text-center">
        <h1 class="text-black font-semibold text-2xl">Don't miss out! Join our newsletter</h1>
        <span >Be the first to know about our exclusive promotions & discounts!</span>
        <div class="mt-8">
            <input type="email" class="input rounded bg-transparent w-1/3 outline-none border-2 border-gray-400 mr-5" placeholder="Enter your email address">
            <button class=" btn btn-info text-white pl-12  pr-12">Subscribe</button>
        </div>
    </div>











</x-layout>
