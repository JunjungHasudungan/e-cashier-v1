<x-app-layout>

    <div class="py-12" x-data="exampleDashboardCashier()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("CASHIER DASHBOARD") }} --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 items-start">
                        {{-- card bagian list product --}}
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex duration-250 focus:outline focus:outline-2 focus:outline-red-500 w-full">
                            <div class="grid grid-cols-2 gap-2 w-full">
                                {{-- @for ($i = 0; $i < 6; $i++) --}}
                               <template x-if="products">
                                    <template x-for="product in products" :key="product.id">
                                        <div class="motion-safe:hover:scale-[1.01] transition-transform w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                            <a href="#">
                                                <img class="p-2 rounded-xl" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="product image" />
                                            </a>
                                            <div class="px-5 pb-5">
                                                <a href="#">
                                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white" x-text="product.name"></h5>
                                                </a>
                                                <div class="flex items-center mt-2.5 mb-5">
                                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                        </svg>
                                                    </div>
                                                    <template x-if="product.stocks">
                                                        <template x-for="stock in product.stocks" :key="stock.id">
                                                            <span x-text="stock.quantity" class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3"></span>
                                                        </template>
                                                    </template>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-sm font-bold text-gray-900 dark:text-white">Rp <p x-text="parseInt(product.price)"></p> </span>
                                                    <button
                                                        x-on:click="addToChart(product)"
                                                        type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </template>
                                {{-- @endfor --}}
                            </div>
                        </div>

                        {{-- card bagian card order list --}}
                        <div class="scale-100 p-6 dark:bg-gray-800 rounded-lg shadow-md flex flex-col justify-between">
                            <div>
                                <h2 class="mt-2 mb-3 text-xl font-semibold text-gray-900 dark:text-white">Daftar Pesanan</h2>
                                <div class="relative overflow-x-auto sm:rounded-lg">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 rounded-s-lg">
                                                    Nama Produk
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Jumlah
                                                </th>
                                                <th scope="col" class="px-6 py-3 rounded-e-lg">
                                                    Harga
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template x-if="listProductOnChart.length > 0">
                                                <template x-for="(product, index) in listProductOnChart" :key="product.id">
                                                    <tr class="bg-white dark:bg-gray-800">
                                                        <th x-text="product.name" scope="row" class=" flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"></th>
                                                        <td class="px-6 py-4">
                                                            <div class="item-center inline-flex gap-2">
                                                                <button x-on:click="incrementQty(product)" type="button" class="hover:bg-green-900 p-2 rounded-lg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="blue" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                                    </svg>
                                                                </button>
                                                                <span x-text="product.qty"></span>
                                                                <button x-on:click="decrementQty(product)" type="button" class="hover:bg-yellow-900 p-2 rounded-lg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td x-text="product.qty * parseInt(product.price)" class="px-6 py-4"></td>
                                                    </tr>
                                                </template>
                                            </template>
                                        </tbody>
                                        <tfoot>
                                            <tr class="font-semibold text-gray-900 dark:text-white">
                                                <th scope="row" class="px-6 py-3 text-base">Total</th>
                                                <td class="px-6 py-3">3</td>
                                                <td class="px-6 py-3">21,000</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
