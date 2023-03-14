
<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="purchaseModal" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
        <div class="purchase-container flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
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
                        <input type="number" id="card_number" name="card_number" placeholder="Your master card number" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-sm text-sm shadow-sm placeholder-slate-400 focus:outline-none" />
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