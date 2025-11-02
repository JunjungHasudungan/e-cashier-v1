<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                   <form action="{{ route('update-product',['productId'=>$product->id]) }}" method="POST" class="p-4 md:p-5">
                        @csrf
                        @method("PUT")
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2  sm:col-span-1">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 cursor-not-allowed" readonly value="{{$product->name}}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                <select name="quantity" value="{{$product->quantity}}" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @for ($i = 0; $i < 10; $i++)
                                        <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                    @endfor
                                </select>
                                  <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input readonly value="{{$product->price}}" type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                                <select readonly value="{{$product->size}}" name="size" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected="{{$product->size}}">{{$product->size}}</option>
                                </select>
                                <x-input-error :messages="$errors->get('size')" class="mt-2" />
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                <textarea readonly value="{{$product->description}}" name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$product->description}}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-3"
                            {{-- deklarasi pembuatan state alpine component --}}
                            x-data="stateBackPage()">
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                            <button
                                {{-- membuat event click --}}
                                @click="backConfirmation()"
                                type="button"
                                class="text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('stateBackPage', () => ({
                // pembuatan nama event click
                backConfirmation() {
                    let confirm = window.confirm('yakin untuk membatalkan?')
                    if(confirm) {
                        // mengalihkan kehalaman
                        document.location.href="{{route('dashboard-admin')}}"
                        // document.window.href ="{{route('dashboard-admin')}}"
                    }
                },
            }))
        })
    </script>
</x-app-layout>
