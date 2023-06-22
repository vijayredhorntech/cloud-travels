<x-layout>

    <div class="w-full h-max ">
        <div class="w-full h-96 bg-no-repeat bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">

        </div>
    </div>

    <x-common.search-bar></x-common.search-bar>
    <x-common.filter-bar></x-common.filter-bar>


    <div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto  py-4 bg-sky-200 ">
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

        </div>
        <div class="w-full mt-10 relative ">
            <x-models.map-modal></x-models.map-modal>
            <div class="flex justify-between px-6">
                 <span class="text-black text-2xl font-semibold">Trendign with Other Agents</span>
                 <button class=" text-blue-500 text-md font-bold">View All</button>
            </div>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
                <div class="w-full">
                    <div class="h-48">
                        <a href="{{route('property')}}"> <img class=" h-full w-full object-fill" src="https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
                        </a>
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
                <div class="w-full">
                    <div class="h-48">
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1476&q=80" alt="">
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
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1513082575024-27c508685592?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
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
                <span class="text-black text-2xl font-semibold">Luxe Collection</span>
                <button class=" text-blue-500 text-md font-bold">View All</button>
            </div>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
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
                <div class="w-full">
                    <div class="h-48">
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1476&q=80" alt="">
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
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1513082575024-27c508685592?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
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
                <span class="text-black text-2xl font-semibold">Recomended for beach lovers</span>
                <button class=" text-blue-500 text-md font-bold">View All</button>
            </div>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
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
                <div class="w-full">
                    <div class="h-48">
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1476&q=80" alt="">
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
                        <img class=" h-full w-full object-fill" src="https://images.unsplash.com/photo-1513082575024-27c508685592?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
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
    <!-- Button to open the modal -->






     {{--newslatter--}}
  <x-common.news-letter></x-common.news-letter>

</x-layout>
