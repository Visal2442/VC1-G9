<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="purchaseModal">
    <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
        <div class="modal-body  modal-content border-none shadow-lg relative  w-full pointer-events-auto bg-clip-padding rounded-md outline-none text-current">
            <div class="purchase-container flex w-full rounded-l-lg" id="purchaseModalLgLabel">
                <div id="summary_booking" class="sum-ticket bg-[#f6f6f6] w-full text-white rounded-l-lg">
                   
                </div>
                <div class="credit-pay bg-[#06263C] p-4 w-full rounded-r-lg ">
                    <h1 class=" uppercase border-b-2 p-2 text-2xl text-white text-center">credit card</h1>
                    <div class="grid grid-cols-5 text-center mt-4  ">
                        <img src="../../assets/imgs/visa.png" alt="" class=" hover:scale-110 transition duration-300 ease-in-out w-16 bg-gray-600 h-11 m-1 rounded">
                        <img src="../../assets/imgs/mastercard.jpg" alt="" class="hover:scale-110 transition duration-300 ease-in-out w-16 bg-gray-600 h-11 m-1 rounded">
                        <img src="../../assets/imgs/paypal.png" alt="" class="hover:scale-110 transition duration-300 ease-in-out w-16 bg-gray-200 h-11 m-1 rounded">
                        <img src="../../assets/imgs/discover.png" alt="" class=" hover:scale-110 transition duration-300 ease-in-out w-16 bg-gray-600 h-11 m-1 rounded">
                        <img src="../../assets/imgs/amazon.webp" alt="" class="hover:scale-110 transition duration-300 ease-in-out w-16 bg-gray-600 h-11 m-1 rounded">
                    </div>
                    <form action="" method="post" class="pt-4" id="payment_form" enctype="multipart/form-data">
                        <label class="block text-sm font-medium text-white mt-4">Name on card</label>
                        <input type="text" id="card_name" name="card_name" placeholder="Ex.jonh smit" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-sm text-sm shadow-sm placeholder-slate-400 focus:outline-none" />
                        <label class="block text-sm font-medium text-white mt-4">Card number</label>
                        <input type="number" id="card_number" name="card_number" placeholder="Your credit card number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-sm text-sm shadow-sm placeholder-slate-400 focus:outline-none" />
                        <label class="block pt-1 text-sm font-medium text-white mt-4">Exp date</label>
                        <div class="cvc flex">
                            <input type="date" id="exp_date" name="exp_date" class="mt-1 block rounded-l-sm  w-3/4 py-2 px-3 bg-white border border-slate-300 text-sm shadow-sm placeholder-slate-400 focus:outline-none" />
                            <input type="number" id="cvv" name="cvv" min=0 placeholder="CVV" class="mt-1 rounded-r-sm block w-1/4 px-3 py-2 text-center bg-white border border-slate-300 text-sm shadow-sm placeholder-slate-400 focus:outline-none" />
                        </div>
                        <button type="submit" class="w-full cursor-pointer uppercase hover:underline hover:bg-yellow-600 text-center text-white bg-yellow-500 mt-6  px-3 py-1.5  text-md font-bold shadow-sm rounded-sm outline-none">Pay now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="views/js/booking/booking.js"></script> -->