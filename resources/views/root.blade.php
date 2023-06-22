<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

        @spladeHead
        @vite('resources/js/app.js')
        <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
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
        </script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    </body>
</html>
