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
                                                        x-on:click="addToCart(product)"
                                                        :disabled="productInCart(product.id)"
                                                        :class="productInCart(product.id)
                                                        ? 'bg-gray-400 cursor-not-allowed'
                                                        : 'bg-blue-700 hover:bg-blue-800'"

                                                        type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <span x-text="productInCart(product.id) ? 'Added' : 'Add to cart'"></span>
                                                    </button>
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
                                                <th scope="col" class="px-6 py-3">
                                                    Harga
                                                </th>
                                                <th scope="col" class="px-6 py-3 rounded-e-lg">

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template x-if="listProductOnCart.length > 0">
                                                <template x-for="(product, index) in listProductOnCart" :key="product.id">
                                                    <tr class="bg-white dark:bg-gray-800">
                                                        <td x-text="product.name" class="px-6 py-4"></td>
                                                        <td class="px-6 py-4">
                                                            <div class="relative flex items-center">
                                                                <button x-on:click="incrementQty(product)" type="button" id="decrement-button" class="shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                    <svg class="w-3 h-3 text-gray-900 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                                                    </svg>
                                                                </button>
                                                                <input type="text" x-model="product.qty" class="shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="12" required />
                                                                <button x-on:click="decrementQty(product)" type="button" id="increment-button" data-input-counter-increment="counter-input" class="shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                                    <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td x-text="product.qty * parseInt(product.price)" class="px-6 py-4"></td>
                                                        <td class="px-6 py-3">
                                                            <svg @click="removeProductFromCart(product.id)" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="cursor-pointer size-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </template>
                                        </tbody>
                                        <template x-if="listProductOnCart.length">
                                            <tfoot>
                                                <tr class="font-semibold text-gray-900 dark:text-white">
                                                    <th scope="row" class="px-6 py-3 text-xs">Total Pembayaran</th>
                                                    <td class="px-6 py-3" x-text="listProductOnCart.reduce((sum, item) => sum + item.qty, 0)"></td>
                                                    <td class="px-6 py-3"
                                                        x-text="listProductOnCart.reduce((sum, item) => sum + (item.qty * item.price), 0)
                                                        .toLocaleString('id-ID')">
                                                    </td>
                                                </tr>
                                                <tr class="font-semibold text-gray-900 dark:text-white">
                                                    <th scope="row" class="px-6 py-3 text-xs">Jumlah Pembayaran</th>
                                                    <td class="px-6 py-3">
                                                       <input
                                                            type="number"
                                                            x-model="dataOrderProduct.amount"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                                                        <template x-if="messageError">
                                                            <p x-text="messageError" class="mt-2.5 text-sm text-fg-danger-strong"></p>
                                                        </template>
                                                        </td>
                                                    <td class="px-3 py-3">
                                                        <button
                                                            x-on:click="payNow()"
                                                            type="button"
                                                            x-show="dataOrderProduct.amount"
                                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-thin rounded-lg text-sm px-1 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                            Pay now
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </template>
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
