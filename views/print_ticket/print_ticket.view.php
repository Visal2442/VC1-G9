<?php  require("views/partials/head.php");?>
    <style>
        @media print {
            #PrintButton {
                display: none;
            }
        }
    </style>


<body class="flex items-center h-screen w-full justify-center">
    <div class=" h-64  w-[44rem] mb-10" style="background:#0A2E47">
        <div class="flex  justify-between items-center">
            <img src="../../assets/logo/cinema-logo.png" alt="" class="w-20 ml-10">uu
            <h1 class="-m-l-5 text-3xl text-yellow-500 font-bold" style="font-family:Algerian;">MOVIE TICKET</h1>
            <div class="w-24"></div>
        </div>
        <div class="ticket flex justify-around w-full">
            <div class="mt-2 ml-12 ">
                <p class="text-white px-1 text-l ">Title : <span> </span></p>
                <p class="text-white px-1 text-l"> Hall : <span> </span> </p>
                <p class="text-white px-1 text-l"> Seat : <span> </span> </p>
                <p class="text-white px-1 text-l">Showing date : <span> </span> </p>
                <p class="text-white px-1 text-l">Booking date : <span> </span></p>
                <p class="text-white px-1 text-l">Price of ticket : <span> </span></p>
            </div>
            <div class="align-middle ml-16  border-l mr-16">
                <img src="images/avengers.jpg" alt="" class="shadow-[0px_22px_70px_4px_rgba(0,0,0,0.56)] w-56 ml-12 mt-2">
            </div>
        </div>
        <div class="flex justify-around items-center">
            <h6 class="text-white text-sm m-1 text-center">© 2023 Copyright: Cinema Booking Ticket</h6>
        </div>
        <center><button onclick="PrintPage()" id="PrintButton" class=" flex items-center text-white p-2 mt-8  bg-blue-500 hover:bg-blue-700 font-lg rounded">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>
                print
            </button>
        </center>
    </div>
</body>
<script type="text/javascript">
    function PrintPage() {
        window.print()
    }
    document.loaded = function() {};
    window.addEventListener('DOMContentLoaded', (event) => {
        PrintPage()
        setTimeout(function() {
            window.close()
        }, 24 * 3600)
    });
</script>

</html>