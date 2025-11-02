<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="stateProduct()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- start button --}}
                        <button type="submit" class=" mb-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            <a href="{{ route('create-product') }}">
                                    product
                                </a>
                        </button>
                    {{-- end button --}}

                    {{-- start for created message session --}}
                    @if (session('status') == 'created-message')
                        <div
                        x-data="{ open: false}"
                        x-show="open"
                        x-transition
                        x-init="setTimeout(()=> open= false, 10000)"
                        class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Produk Baru berhasil disimpan..</span>
                            </div>
                        </div>
                    @endif
                    {{-- end for created message session --}}

                    {{-- start for updated message session --}}
                    @if (session('status') == 'updated-message')
                        <div
                        x-data="{ updated: false}"
                        x-show="updated"
                        x-transition
                        x-init="setTimeout(()=> updated= false, 10000)"
                        class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Produk berhasil diupdate..</span>
                            </div>
                        </div>
                    @endif
                    {{-- end for updated message session --}}

                    {{-- start for updated message session --}}

                    {{-- end for updated message session --}}

                    {{-- start for deleted message session --}}

                    {{-- end for deleted message session --}}

                    {{-- start table --}}
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                        #
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Produk
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jumlah
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Ukuran
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Harga
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($listProduct as $product)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $loop->iteration }}
                                            </th>
                                            <td class="px-6 py-4">
                                            {{ $product->name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @forelse ($product->stocks as $stock)
                                                    <p class="hover:underline">
                                                        <a href="{{ route('restock-product', $product->id) }}">{{ $stock->quantity ?? 0 }}  </a>
                                                    </p>
                                                @empty

                                                @endforelse
                                            </td>
                                             <td class="px-6 py-4">
                                                {{ $product->size }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $product->price }}
                                            </td>
                                            <td class="px-6 py-4 text-right gap-3">
                                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                                                <a href="{{ route('product', $product->id , 'edit' ) }}" class="font-medium text-bgray-600 dark:text-gray-500 hover:underline">Edit</a>
                                                <a @click="deleteConfirmation( {{ $product->id }} )" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                            Data produk tidak ada
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mt-2">
                                {{-- membuat link untuk pagination --}}
                                {{ $listProduct->links() }}
                            </div>
                        </div>
                    {{-- end table --}}

                    <!-- Modal toggle -->

                    <!-- Main modal -->
                    <div  tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create New Product
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('stateProduct', () => ({
                deleteConfirmation(productId) {
                    let confirmation= confirm('Yakin untuk menghapus?')
                    if (confirmation) {
                        axios.delete('delete-product/'+productId)
                    }

                },
            }))
        })
    </script>
</x-app-layout>
