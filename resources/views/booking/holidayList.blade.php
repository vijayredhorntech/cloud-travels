@stack('customStyle')
<Style>

</Style>


<x-layout>

    <div class="w-full h-max ">
        <div class="w-full h-96 bg-no-repeat bg-center bg-cover bg-[url('https://plus.unsplash.com/premium_photo-1682145930966-712ce7177919?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')]">

        </div>
    </div>

    <x-common.search-bar></x-common.search-bar>
    <x-common.filter-bar></x-common.filter-bar>


    <div class="lg:w-3/4 md:w-3/4 sm:w-full w-full h-max m-auto  py-4 bg-sky-200 ">

        <div class="w-full h-max flex justify-between lg:flex-row md:flex-row sm:flex-col flex-col relative ">

            <x-common.hotel-types></x-common.hotel-types>
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
            <x-common.hotel-card-heading title="Trending with other Agents" address="https://www.google.com"></x-common.hotel-card-heading>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596386461350-326ccb383e9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1113&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>

            </div>

        </div>
        <div class="w-full mt-10 ">
            <x-common.hotel-card-heading title="Luxe Collection" address="https://www.google.com"></x-common.hotel-card-heading>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596386461350-326ccb383e9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1113&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>

            </div>

        </div>
        <div class="w-full mt-10 ">
            <x-common.hotel-card-heading title="Recommended for beach lovers" address="https://www.google.com"></x-common.hotel-card-heading>
            <div class="px-6 w-full mt-6 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596386461350-326ccb383e9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1113&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Aska Lara Resort & Spa" hotel-desc="Antalya-Lara" rating-count="4.4" rating-status="Excellent" price="841" hotel-image="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>
                <x-common.hotel-card hotel-name="Hotel Mumbai" hotel-desc="Antalya-Lara" rating-count="4.0" rating-status="Average" price="500" hotel-image="https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"></x-common.hotel-card>

            </div>

        </div>
    </div>
    <!-- Button to open the modal -->






    {{--newslatter--}}
    <x-common.news-letter></x-common.news-letter>

</x-layout>
