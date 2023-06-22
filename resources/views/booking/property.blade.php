<x-layout>

    <div class="w-full h-max ">
        <div class="w-full h-96 bg-no-repeat bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">

        </div>
    </div>

    <x-common.search-bar></x-common.search-bar>
    <x-common.filter-bar></x-common.filter-bar>


    <div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto  py-4 bg-sky-100 ">
        <div class="w-full h-max flex justify-between lg:flex-row md:flex-row sm:flex-col flex-col relative ">
            <div class="h-max lg:w-3/4 md:w-3/4 sm:w-full w-full flex justify-between  flex-wrap px-12 ">
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-arrow-trend-up" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Trending</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-gem" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Luxe</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-umbrella-beach" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Beach</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-person" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Families</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-tree" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Golf</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-dumbbell" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">Wellness</button>
                </div>
                <div class=" flex flex-col">
                    <span class="m-auto text-xl"><i class="fa-solid fa-hotel" style="color: deepskyblue"></i></span>
                    <button class=" w-full text-gray-600 text-lg font-semibold ">All Hotels</button>
                </div>
            </div>
            <div class=" h-max lg:w-1/4 md:w-1/4 sm:w-full w-full flex justify-end px-12  ">
                <div class="m-auto">
                    <span class="text-sky-900 text-lg font-semibold mr-2 m-auto "><i class="fa-solid fa-map" style="color: deepskyblue"></i></span>
                    <button class="text-gray-600 text-lg font-semibold m-auto" onclick="openMapModal()">Show Maps</button>
                </div>
            </div>
            <x-models.filter-modal></x-models.filter-modal>
            <x-models.refund-modal></x-models.refund-modal>
            <x-models.map-modal></x-models.map-modal>
        </div>

        <div class="w-full flex lg:flex-row md:flex-row sm:flex-row flex-col-reverse">
            <div class="lg:w-2/5  md:w-2/5 sm:w-2/5  w-full h-max">
                <div class="w-full mt-10 relative ">

                    <div class="flex justify-between px-6">
                        <span class="text-black lg:text-2xl md:text-2xl sm:text-xl text-md font-semibold">Trendign with Other Agents</span>
                        <button class=" text-blue-500 text-md font-bold">View All</button>
                    </div>
                    <div class="px-6 w-full mt-6 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-6">
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1512699355324-f07e3106dae5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-full mt-10 ">
                    <div class="flex justify-between px-6">
                        <span class="text-black lg:text-2xl md:text-2xl sm:text-xl text-md font-semibold">Luxe Collection</span>
                        <button class=" text-blue-500 text-md font-bold">View All</button>
                    </div>
                    <div class="px-6 w-full mt-6 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1512699355324-f07e3106dae5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-full mt-10 ">

                    <div class="flex justify-between px-6">
                        <span class="text-black lg:text-2xl md:text-2xl sm:text-xl text-md font-semibold">Recomended for beach lovers</span>
                        <button class=" text-blue-500 text-md font-bold">View All</button>
                    </div>
                    <div class="px-6 w-full mt-6 grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4">
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="h-48">
                                <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1512699355324-f07e3106dae5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                            </div>
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-xl">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>

                                    <span class="text-black font-semibold text-lg mt-2">Aska Lara Resort & Spa</span>
                                    <span  class="text-black font-semibold text-md mt-8">Antalya-Lara</span>
                                    <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-md text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="lg:w-3/5 md:w-3/5 sm:w-3/5 w-full">
                <div class="w-full mt-10 ">
                    <div class="px-6 w-full mt-6 ">
                        <div class="w-ful grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-2 gap-4">
                            <div class=" w-full h-32">
                                <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                            </div>
                            <div class=" w-full h-32">
                                <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1513082575024-27c508685592?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                            </div>
                            <div class=" w-full h-32">
                                <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1529824249987-7537c3e8606b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1633&q=80" alt="">
                            </div>
                            <div class=" w-full h-32">
                                <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex justify-between bg-white p-2">
                                <div class="flex flex-col">
                            <span class="text-md">
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                                <i class="fa-solid fa-star" style="color: deepskyblue; margin-right: 5px"></i>
                            </span>
                                    <span class="mt-2 text-gray-600 font-normal text-sm">from <span class="font-bold text-black">₹ 841</span></span>
                                    <spanv class="font-semibold text-xs text-gray-400"><span>₹ 841</span> total for 1 room </spanv>
                                </div>

                                <div class="flex flex-col">


                                    <span class="text-black font-semibold text-md ">Aska Lara Resort & Spa</span>
                                    <span  class="text-gray-600 font-semibold text-xs mt-1">kemeragzi mah, facilities Card no. 397</span>
                                    <span  class="text-gray-600 font-semibold text-xs mt-1">Antalys</span>
                                    <span  class="text-gray-600 font-semibold text-xs mt-1">Turky </span>
                                    <span  class="text-gray-600 font-semibold text-xs mt-1">7110</span>

                                </div>



                                <div class="flex flex-col">
                                    <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> 4.4</span>
                                    <span class="text-black font-semibold text-md">Excellent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-max flex flex-wrap  px-6">
                    <div class="flex justify-between lg:w-1/2 md:w-3/4 sm:w-3/4 w-3/4 bg-sky-300 p-2">
                        <Button class="text-gray-600 font-semibold">Rates</Button>
                        <Button class="text-gray-600 font-semibold">Over View</Button>
                        <Button class="text-gray-600 font-semibold">Reviews</Button>
                        <Button class="text-gray-600 font-semibold">Location</Button>

                    </div>
                    <div class="lg:w-1/2 md:w-1/4 sm:w-1/4 w-1/4 bg-sky-300 flex justify-end align-middle p-2">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 mr-2 m-auto">
                        <span class="text-gray-600 font-semibold">Share Quotes</span>
                    </div>
                </div>

                <div class="w-full h-max px-6 mt-4">
                    <div class="w-full flex p-3">
                        <div class="w-1/5  h-max">
                            <span class="text-gray-600 font-bold text-sm">Room Types</span>
                        </div>
                        <div class="w-1/5  h-max">
                            <span class="text-gray-600 font-bold text-sm">Board</span>
                        </div>
                        <div class="w-1/5  h-max">
                            <span class="text-gray-600 font-bold text-sm">Avg/ Night</span>
                        </div>
                        <div class="w-1/5  h-max">
                            <span class="text-gray-600 font-bold text-sm">Total Price</span>
                        </div>

                    </div>

                    <div class="w-full flex mt-3 border-2 border-gray-300 rounded-lg p-3 bg-white shdow-md shadow-gray-500">
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">Main Building</span>
                            <span class="text-gray-500 font-semibold text-sm">Connection Room</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">All Inclusive</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">₹ 317.2</span>
                        </div>
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">₹ 312.25</span>
                            <span class="text-sky-600 font-semibold text-xs">Refundable till Jul 23 2023</span>
                        </div>
                        <div class="w-1/5 flex justify-center h-max">
                                <a href="{{route('bookingStage1')}}" class="text-sky-600 border-b-2 border-b-sky-400 font-semibold">Book</a>

                        </div>


                    </div>
                    <div class="w-full flex mt-3 border-2 border-gray-300 rounded-lg p-3 bg-white shdow-md shadow-gray-500">
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">Main Building</span>
                            <span class="text-gray-500 font-semibold text-sm">Connection Room</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">All Inclusive</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">₹ 317.2</span>
                        </div>
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">₹ 312.25</span>
                            <span class="text-sky-600 font-semibold text-xs">Refundable till Jul 23 2023</span>
                        </div>
                        <div class="w-1/5 flex justify-center h-max">
                            <button class="text-sky-600 border-b-2 border-b-sky-400 font-semibold">Book</button>

                        </div>


                    </div>
                    <div class="w-full flex mt-3 border-2 border-gray-300 rounded-lg p-3 bg-white shdow-md shadow-gray-500">
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">Main Building</span>
                            <span class="text-gray-500 font-semibold text-sm">Connection Room</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">All Inclusive</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">₹ 317.2</span>
                        </div>
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">₹ 312.25</span>
                            <span class="text-red-600 font-semibold text-xs">Free star from today</span>
                        </div>
                        <div class="w-1/5 flex justify-center h-max">
                            <button class="text-sky-600 border-b-2 border-b-sky-400 font-semibold">Book</button>

                        </div>


                    </div>
                    <div class="w-full flex mt-3 border-2 border-gray-300 rounded-lg p-3 bg-white shdow-md shadow-gray-500">
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">Main Building</span>
                            <span class="text-gray-500 font-semibold text-sm">Connection Room</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">All Inclusive</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">₹ 317.2</span>
                        </div>
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">₹ 312.25</span>
                            <span class="text-sky-600 font-semibold text-xs">Refundable till Jul 23 2023</span>
                        </div>
                        <div class="w-1/5 flex justify-center h-max">
                            <button class="text-sky-600 border-b-2 border-b-sky-400 font-semibold">Book</button>

                        </div>


                    </div>
                    <div class="w-full flex mt-3 border-2 border-gray-300 rounded-lg p-3 bg-white shdow-md shadow-gray-500">
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">Main Building</span>
                            <span class="text-gray-500 font-semibold text-sm">Connection Room</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">All Inclusive</span>
                        </div>
                        <div class="w-1/5 flex h-max">
                            <span class="text-gray-500 font-semibold text-sm">₹ 317.2</span>
                        </div>
                        <div class="w-1/5 flex h-max flex flex-col">
                            <span class="text-gray-500 font-semibold text-sm">₹ 312.25</span>
                            <span class="text-sky-600 font-semibold text-xs">Refundable till Jul 23 2023</span>
                        </div>
                        <div class="w-1/5 flex justify-center h-max">
                            <button class="text-sky-600 border-b-2 border-b-sky-400 font-semibold">Book</button>

                        </div>


                    </div>



                </div>
            </div>


        </div>



    </div>
    <!-- Button to open the modal -->






    {{--newslatter--}}
    <x-common.news-letter></x-common.news-letter>

</x-layout>
