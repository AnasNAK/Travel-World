<section class="flex justify-around gap-11 my-9">
  
    <form action="" class="flex justify-center items-center ">
        <p class="font-bold text-lg mr-5">Filter by destination</p>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 412 232">
                <path
                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                    fill="#648299" fill-rule="nonzero" />
            </svg>
            <select
                class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Choose a destination</option>
                <option>Red</option>
                <option>Blue</option>
                <option>Yellow</option>

            </select>
        </div>
    </form>
 
    <form action="" class="flex justify-center items-center ">

           <p class="font-bold text-lg mr-5">Sort by the newest travel</p>

        <div class="inline-block relative cursor-pointer">
            <div
                class="flex items-center justify-center w-12 h-12 bg-gray-300 rounded-full transition duration-300 ease-in-out hover:bg-gray-500">
                <i class="fas fa-arrow-up text-laravel text-3xl"></i>
            </div>
        </div>

        <div class="inline-block relative ml-4 cursor-pointer">
            <div
                class="flex items-center justify-center w-12 h-12 bg-gray-300 rounded-full transition duration-300 ease-in-out hover:bg-gray-500">
                <i class="fas fa-arrow-down text-red-500 text-3xl"></i>
            </div>
        </div>
    </form>
</section>
