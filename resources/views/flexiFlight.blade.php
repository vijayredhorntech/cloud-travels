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

    <div class="w-full flex justify-center p-4">
        <div class="lg:w-[80%]  md:w-[80%] w-full bg-red-50">
              <div class="w-full bg-white p-4 shadow-lg shadow-gray-300 rounded-md" style="overflow-x: auto">
                      <table class="lg:w-full md:w-full w-[1000px] table-fixed " style="table-layout: fixed">
                          <tr class="w-full bg-[#3abff8]">
                                <th class=" w-48 p-0">
                                        <img class="h-full w-full object-cover" src="{{asset('assets/images/flex-date-icon.jpg')}}" alt="">
                                </th>
                                  <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                  </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                                <th class=" w-auto p-1">
                                    <div class="flex flex-col items-center text-white justify-center">
                                        <span class="font-normal text-xs">Return</span>
                                        <span class="font-normal text-xs">5 Sep (Thu)</span>
                                    </div>
                                </th>
                            </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                      <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                           <span class="text-xs">Depart</span>
                                      </div>
                                      <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                           <span class="text-xs"> 1 Sep (Sun)</span>
                                      </div>
                                  </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                  </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>
                                <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>
                                <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>
                                <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>
                                <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>
                                <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                    <div class="flex justify-center items-center gap-4">
                                        <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                        <span class="text-xs font-normal"> £ 692.20</span>
                                    </div>
                                </th>


                            </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                          <tr class="w-full">
                              <th class="border-[1px] h-8  w-48 p-0 grid grid-cols-2 items-center ">
                                  <div class="w-full  h-full flex justify-center items-center bg-[#3abff8] text-white">
                                      <span class="text-xs">Depart</span>
                                  </div>
                                  <div class="w-full h-full flex justify-center items-center bg-green-500 text-white">
                                      <span class="text-xs"> 1 Sep (Sun)</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>
                              <th class="border-[1px] h-8 border-black border-dashed text-black hover:border-[#3abff8] hover:border-solid transition ease-in duration-2000">
                                  <div class="flex justify-center items-center gap-4">
                                      <img class="h-6 w-auto rounded-[2px]" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                      <span class="text-xs font-normal"> £ 692.20</span>
                                  </div>
                              </th>


                          </tr>
                      </table>
              </div>
            <div class="w-full bg-white mt-6 shadow-lg shadow-gray-300 rounded-md">
                      <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-1 ">
                            <div class="w-full lg:col-span-3 md:col-span-3 col-span-1 lg:border-r-[1px] md:border-r-[1px] border-b-[1px] lg:border-r-[#3abff8] md:border-r-[#3abff8] lg:border-b-0 md:border-b-0 border-b-[#3abff8]">
                                 <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 px-2 py-1 lg:gap-0 md:gap-0 gap-6">
                                     <div class="w-full">
                                              <span class="text-[#3abff8] font-semibold text-sm">Outbond:</span>
                                               <div class="w-full flex flex-col mt-4">
                                                   <img class="h-auto w-10" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                                   <span class="font-normal text-sm">JetBlue Airways</span>
                                                   <span class="text-xs font-normal text-[#3abff8]">Aircraft: <span class="text-black">32Q</span></span>
                                               </div>
                                       </div>
                                     <div class="w-full">
                                         <span class="text-[#3abff8] font-semibold text-sm">&nbsp</span>
                                         <div class="w-full flex flex-col mt-4">
                                             <span class="font-normal text-sm text-black">London Heathrow Arpt</span>
                                             <span class="font-normal text-sm text-gray-600">London</span>
                                             <span class="text-xs font-normal text-[#3abff8] mt-2">Class: <span class="text-black">O</span></span>
                                         </div>
                                     </div>
                                     <div class="w-full flex flex-col lg:col-span-1 md:col-span-1 col-span-2">
                                            <div class="flex flex-col items-center">
                                                  <span class="text-xs font-normal text-black">Stop 0</span>
                                            </div>
                                            <div class="w-full flex justify-between gap-2">
                                                  <div class="w-max flex flex-col items-center justify-center h-full">
                                                        <span class="font-bold text-black text-md">07:25</span>
                                                        <span class="font-bold text-black text-xs">03 Sep</span>
                                                  </div>
                                                  <div class="w-full flex-grow h-full flex flex-col items-center justify-center">
                                                      <img class="lg:h-12 w-auto" src="{{asset('assets/images/flightTourLogo.png')}}" alt="">
                                                      <span class="text-xs font-normal text-black">8h 24m</span>

                                                  </div>
                                                  <div class="w-max flex flex-col items-center justify-center h-full">
                                                        <span class="font-bold text-black text-md">10:29</span>
                                                        <span class="font-bold text-black text-xs">03 Sep</span>
                                                  </div>

                                            </div>


                                             <div class="flex justify-center">
                                                 <span class="text-xs font-normal text-[#3abff8] mt-2">Baggage Allowance:<span class="text-black"> 1 Piece(s) </span></span>

                                             </div>
                                     </div>
                                     <div class="w-full lg:col-span-1 md:col-span-1 col-span-2">
                                         <span class="text-[#3abff8] font-semibold text-sm">&nbsp</span>
                                         <div class="w-full flex flex-col mt-4 items-end">
                                             <span class="font-normal text-sm text-black">John F Kennedy Intl</span>
                                             <span class="font-normal text-sm text-gray-600">New York</span>
                                             <span class="text-xs font-normal text-[#3abff8] mt-2">Miles: <span class="text-black">3452</span></span>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="w-full lg:col-span-3 md:col-span-3 col-span-1 p-4">
                                            <div class="flex justify-center bg-gray-50">
                                                  <button onclick="document.getElementById('availableFlights1').classList.toggle('hidden')" class="text-sm flex gap-2 items-center text-[#3abff8] border-[1px] border-[#3abff8] px-2 py-0.5 rounded-[50px] hover:text-white hover:bg-[#3abff8] transition ease-in duration-2000"><i class="fa fa-chevron-down"></i> See More Flight Options</button>
                                            </div>

                                             <div class="w-full bg-white p-4 flex justify-center hidden" id="availableFlights1">
                                                    <div class="w-full bg-white shadow-lg shadow-gray-200 p-4 w-full gap-4 flex flex-col">
                                                        <div class="flex gap-6 justify-center">
                                                             <div class="w-max flex items-center">
                                                                 <label for="flight1"></label>
                                                                 <input id="flight1" name="flight1" type="radio">
                                                             </div>
                                                            <div class=" flex flex-col lg:col-span-1 md:col-span-1 col-span-2">
                                                                <div class="flex flex-col items-center">
                                                                    <span class="text-xs font-normal text-black">Stop 0</span>
                                                                </div>

                                                                <div class="w-full flex justify-between gap-2">
                                                                    <div class="w-max flex flex-col items-center justify-center h-full">
                                                                        <span class="font-bold text-black text-md">07:25</span>
                                                                    </div>
                                                                    <div class="w-full  h-full flex flex-col items-center justify-center">
                                                                        <img class="lg:h-12 w-auto" src="{{asset('assets/images/flightTourLogo.png')}}" alt="">
                                                                        <span class="text-xs font-normal text-black">8h 24m</span>

                                                                    </div>
                                                                    <div class="w-max flex flex-col items-center justify-center h-full">
                                                                        <span class="font-bold text-black text-md">10:29</span>
                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div class="flex gap-6 justify-center">
                                                            <div class="w-max flex items-center">
                                                                <label for="flight1"></label>
                                                                <input id="flight1" name="flight1" type="radio">
                                                            </div>
                                                            <div class=" flex flex-col lg:col-span-1 md:col-span-1 col-span-2">
                                                                <div class="flex flex-col items-center">
                                                                    <span class="text-xs font-normal text-black">Stop 0</span>
                                                                </div>

                                                                <div class="w-full flex justify-between gap-2">
                                                                    <div class="w-max flex flex-col items-center justify-center h-full">
                                                                        <span class="font-bold text-black text-md">07:25</span>
                                                                    </div>
                                                                    <div class="w-full  h-full flex flex-col items-center justify-center">
                                                                        <img class="lg:h-12 w-auto" src="{{asset('assets/images/flightTourLogo.png')}}" alt="">
                                                                        <span class="text-xs font-normal text-black">8h 24m</span>

                                                                    </div>
                                                                    <div class="w-max flex flex-col items-center justify-center h-full">
                                                                        <span class="font-bold text-black text-md">10:29</span>
                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>


                                                    </div>
                                             </div>
                                        </div>
                                  <div class="w-full grid lg:grid-cols-4 md:grid-cols-4 grid-cols-2 px-2 py-1 lg:gap-0 md:gap-0 gap-6">
                                    <div class="w-full">
                                        <span class="text-[#3abff8] font-semibold text-sm">Inbound:</span>
                                        <div class="w-full flex flex-col mt-4">
                                            <img class="h-auto w-10" src="{{asset('assets/images/B6.jpg')}}" alt="">
                                            <span class="font-normal text-sm">JetBlue Airways</span>
                                            <span class="text-xs font-normal text-[#3abff8]">Aircraft: <span class="text-black">32Q</span></span>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <span class="text-[#3abff8] font-semibold text-sm">&nbsp</span>
                                        <div class="w-full flex flex-col mt-4">
                                            <span class="font-normal text-sm text-black">London Heathrow Arpt</span>
                                            <span class="font-normal text-sm text-gray-600">London</span>
                                            <span class="text-xs font-normal text-[#3abff8] mt-2">Class: <span class="text-black">O</span></span>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col lg:col-span-1 md:col-span-1 col-span-2">
                                        <div class="flex flex-col items-center">
                                            <span class="text-xs font-normal text-black">Stop 0</span>
                                        </div>
                                        <div class="w-full flex justify-between gap-2">
                                            <div class="w-max flex flex-col items-center justify-center h-full">
                                                <span class="font-bold text-black text-md">07:25</span>
                                                <span class="font-bold text-black text-xs">03 Sep</span>
                                            </div>
                                            <div class="w-full flex-grow h-full flex flex-col items-center justify-center">
                                                <img class="lg:h-12 w-auto" src="{{asset('assets/images/flightTourLogo.png')}}" alt="">
                                                <span class="text-xs font-normal text-black">8h 24m</span>

                                            </div>
                                            <div class="w-max flex flex-col items-center justify-center h-full">
                                                <span class="font-bold text-black text-md">10:29</span>
                                                <span class="font-bold text-black text-xs">03 Sep</span>
                                            </div>

                                        </div>


                                        <div class="flex justify-center">
                                            <span class="text-xs font-normal text-[#3abff8] mt-2">Baggage Allowance:<span class="text-black"> 1 Piece(s) </span></span>

                                        </div>
                                    </div>
                                    <div class="w-full lg:col-span-1 md:col-span-1 col-span-2">
                                        <span class="text-[#3abff8] font-semibold text-sm">&nbsp</span>
                                        <div class="w-full flex flex-col mt-4 items-end">
                                            <span class="font-normal text-sm text-black">John F Kennedy Intl</span>
                                            <span class="font-normal text-sm text-gray-600">New York</span>
                                            <span class="text-xs font-normal text-[#3abff8] mt-2">Miles: <span class="text-black">3452</span></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full lg:col-span-3 md:col-span-3 col-span-1 p-4">
                                    <div class="flex justify-center bg-gray-50">
                                        <button onclick="document.getElementById('availableFlights2').classList.toggle('hidden')" class="text-sm flex gap-2 items-center text-[#3abff8] border-[1px] border-[#3abff8] px-2 py-0.5 rounded-[50px] hover:text-white hover:bg-[#3abff8] transition ease-in duration-2000"><i class="fa fa-chevron-down"></i> See More Flight Options</button>
                                    </div>

                                    <div class="w-full bg-white p-4 flex justify-center hidden" id="availableFlights2">
                                        <div class="w-full bg-white shadow-lg shadow-gray-200 p-4 w-full gap-4 flex flex-col">
                                            <div class="flex gap-6 justify-center">
                                                <div class="w-max flex items-center">
                                                    <label for="flight1"></label>
                                                    <input id="flight1" name="flight1" type="radio">
                                                </div>
                                                <div class=" flex flex-col lg:col-span-1 md:col-span-1 col-span-2">
                                                    <div class="flex flex-col items-center">
                                                        <span class="text-xs font-normal text-black">Stop 0</span>
                                                    </div>

                                                    <div class="w-full flex justify-between gap-2">
                                                        <div class="w-max flex flex-col items-center justify-center h-full">
                                                            <span class="font-bold text-black text-md">07:25</span>
                                                        </div>
                                                        <div class="w-full  h-full flex flex-col items-center justify-center">
                                                            <img class="lg:h-12 w-auto" src="{{asset('assets/images/flightTourLogo.png')}}" alt="">
                                                            <span class="text-xs font-normal text-black">8h 24m</span>

                                                        </div>
                                                        <div class="w-max flex flex-col items-center justify-center h-full">
                                                            <span class="font-bold text-black text-md">10:29</span>
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>




                          <div class="w-full flex  flex-col items-center p-6">
                                  <span class="font-bold text-xl text-[#3abff8]">£ 692.20</span>
                              <button class="w-max px-4 font-semibold text-white bg-[#3abff8] rounded-sm flex items-center gap-2 border-[1px] border-[#3abff8] hover:bg-white hover:text-[#3abff8] transition ease-in duration-2000">Book Flight <i class="fa fa-chevron-right text-sm"></i> </button>
                          </div>
                      </div>
                </div>
        </div>
    </div>




</x-layout>



