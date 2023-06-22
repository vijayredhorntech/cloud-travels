<div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto  py-4 bg-white ">
    <div class="w-full h-max flex justify-between lg:flex-row md:flex-row sm:flex-col flex-col ">
        <div class="h-max lg:w-3/4 md:w-3/4 sm:w-full w-full flex justify-between flex-wrap gap-2 px-12">
            <div>
                <button class=" w-full text-black text-lg font-semibold ">Property Name</button>
            </div>
            <div>
                <button class=" w-full text-black text-lg font-semibold ">Star</button>
            </div>
            <div>
                <button class=" w-full text-black text-lg font-semibold ">Location</button>
            </div>
            <div>
                <button class=" w-full text-black text-lg font-semibold ">Budget</button>
            </div>
            <div>
                <button class=" w-full text-black text-lg font-semibold" onclick="openFilterModal()">More Filters</button>
            </div>
        </div>
        <div class=" h-max lg:w-2/5 md:w-2/5 sm:w-full w-full flex justify-end px-12 ">
            <div class="mr-3 flex">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 m-auto mr-2 text-blue-600 bg-gray-200 border-gray-400 rounded focus:ring-0 ">
                <button class="text-black text-lg font-semibold " onclick="openRecomendModal()">Refundable Only</button>

            </div>
            <div >
                <button class="text-sky-900 text-lg font-semibold "><i class="fa-solid fa-filter" style="color: deepskyblue"></i></button>
                <button class="text-black text-lg font-semibold mr-2 "> Sort By</button>

                <span  class="text-sky-900 text-lg font-semibold "><i class="fa-sharp fa-solid fa-caret-down" style="color: deepskyblue"></i></span>
            </div>
        </div>
    </div>

</div>
<!-- JavaScript code -->

