<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        @spladeHead
        @vite('resources/js/app.js')
        <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    </head>
    <body class="font-sans antialiased ">
        @splade




        <script>
            function openFilterModal() {
                document.getElementById("filterModal").classList.remove("hidden");

            }

            function closeFilterModal() {
                document.getElementById("filterModal").classList.add("hidden");
            }
            function openRecomendModal() {
                document.getElementById("refundFilterModal").classList.remove("hidden");

            }

            function closeRecomendModal() {
                document.getElementById("refundFilterModal").classList.add("hidden");
            }


            function openMapModal() {
                document.getElementById("mapModal").classList.remove("hidden");

            }

            function closeMapModal() {
                document.getElementById("mapModal").classList.add("hidden");
            }


            function openGuestModal() {
                document.getElementById("guestModal").classList.remove("hidden");

            }

            function closeGuestModal() {
                document.getElementById("guestModal").classList.add("hidden");
            }
        </script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous"></script>

        <script src="{{asset('assets/js/lightbox.js')}}"></script>
    </body>

</html>
