   <!-- Modal -->
   <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"id="createMovie" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl  leading-normal text-gray-800" id="exampleModalScrollableLabel">ADD MOVIE</h5>
                <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body relative p-5">
            <form action="#" class="md:flex w-full mb-5 mt-5">
                <div class="m-auto">
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-3">
                            <label for="" class="text-black ">Name</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-black-400 text-lg"></i></div>
                                <input type="text" class="w-96 -ml-10 p-1 border  border-black  outline-none rounded  text-gray-900 bg-gray-50 " placeholder="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black ">Image</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-black-400 text-lg"></i></div>
                                    <input type="file" class="w-96 -ml-10 pr-3 p-1 border  border-black outline-none  rounded text-gray-900 bg-gray-50 " required>
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black ">Duration</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-black-400 text-lg"></i></div>
                                    <input type="text" class="w-96 -ml-10 pr-3 p-1 border  border-black  outline-none rounded text-gray-900 bg-gray-50 " placeholder="enter the duration" required>
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black "> Subtile</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-black-400 text-lg"></i></div>
                                    <input type="text" class="w-96 -ml-10 pr-3 p-1 border  border-black  outline-none rounded text-gray-900 bg-gray-50 " placeholder="subtile">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black text-blak-500">Description</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-black-400 text-lg"></i></div>
                                    <textarea  name ="description" id ="description" class="w-96 -ml-10 pr-3 p-1  border  border-black  outline-none rounded text-gray-900 bg-gray-50 " placeholder=" enter the text"></textarea >
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black ">Trallier</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-black-400 text-lg"></i></div>
                                    <input type="url" id="website" class="w-96 -ml-10 pr-3 p-1 border  border-black  outline-none rounded text-gray-900 bg-gray-50 " placeholder="link">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black"> Languages</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-black-400 text-lg"></i></div>
                                    <input type="text" class="w-96 -ml-10 pr-3 p-1 border  border-black  outline-none rounded  text-gray-900 bg-gray-50 " placeholder="languages">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-black "> Genre</label>
                                <div class="flex">
                                <select id="genre" class=" text-sm  w-96 p-2  border  border-black  rounded  text-gray-900 bg-gray-50 ">
                                    <option selected >Choose a movie</option>
                                    <option value="AM">Action </option>
                                    <option value="DM">Dramas</option>
                                    <option value="HM">Holiwolod </option>
                                    <option value="AD">Adventure</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="release date" class="text-black"> Release Date</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-black-400 text-lg"></i></div>
                                    <input type="date" class="w-96 -ml-10 pr-3 p-1 border  border-black  outline-none rounded text-gray-900 bg-gray-50 ">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end  border-gray-200 ml-16 ">
                            <button type="button" class="px-4 py-2 bg-red-600 text-white  text-xs leading-tight uppercase rounded shadow-md "data-bs-dismiss="modal">CANCEL</button>
                            <button type="button" class="ml-3 px-4 py-2 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md "data-bs-dismiss="modal">ADD</button>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
        </div>
    </div>  