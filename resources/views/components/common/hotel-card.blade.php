<div class="w-full">
    <div class="h-48">
        <a href="{{route('property')}}"> <img class=" h-full w-full object-cover" src="{{$hotelImage}}" alt="">
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

            <span class="text-black font-semibold text-lg mt-2">{{$hotelName}}</span>
            <span  class="text-black font-semibold text-md mt-8">{{$hotelDesc}}</span>
            <span class="mt-8 text-gray-600 font-normal">from <span class="font-bold text-black">₹ {{$price}}</span></span>
            <spanv class="font-semibold text-md text-gray-400"><span>₹ {{$price}}</span> total for 1 room </spanv>
        </div>
        <div class="flex flex-col">
            <span class="text-xl font-bold" style="color: deepskyblue"><i class="fa-solid fa-comment"></i> {{$ratingCount}}</span>
            <span class="text-black font-semibold text-md">{{$ratingStatus}}</span>
        </div>
    </div>
</div>
