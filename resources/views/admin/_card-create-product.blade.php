<x-app-layout>
    <div class="py-12" x-data="stateCreateProduct">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('store-product') }}" method="POST" class="p-4 md:p-5">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2  sm:col-span-1">
                                <label 
                                    for="name" 
                                    class="block mb-2 text-sm font-medium text-red-900 dark:text-white">Nama</label>
                                <input 
                                    type="text" 
                                    x-model="product.name" 
                                    name="name" id="name" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                    placeholder="Ketik nama produk">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                <select x-model="product.quantity" name="quantity" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Jumlah</option>
                                    @for ($i = 0; $i < 10; $i++)
                                        <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                    @endfor
                                </select>
                                  <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2.5 text-sm font-medium text-heading">Price</label>
                                <input 
                                    type="number" 
                                    x-model="product.price" 
                                    name="price" id="price" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                    placeholder="Rp.5000">
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                                <select x-model="product.size" name="size" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Ukuran</option>
                                    <option value="s">Kecil</option>
                                    <option value="m">Sedang</option>
                                    <option value="l">Besar</option>
                                    <option value="xl">Ekstra Besar</option>
                                </select>
                                <x-input-error :messages="$errors->get('size')" class="mt-2" />
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                                <textarea 
                                    x-model="product.description" 
                                    name="description" 
                                    id="description" 
                                    rows="4" 
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Ketik keterangan produk disini"></textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Simpan
                            </button>
                            <button 
                                type="button" 
                                x-on:click="btnCancel"
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
            Alpine.data('stateCreateProduct', () => ({
                product: {name: '', size: '', price: '', quantity: '', description: ''},

                btnCancel() {
                    // mengambil sebagian data objek product
                    let someDataProduct = Object.values(this.product).some(value => value !== '')
                    // mengecek jika ada sebagian data, 
                    if(someDataProduct) {
                        let confirmation = confirm('yakin membatalkan?')
                        if(confirmation) {
                            // kembali kehalaman url admin-dashboard
                            window.location.href='admin-dashboard'
                        }
                    } 
                    window.location.href='admin-dashboard'
                },
            }))
        })
    </script>
</x-app-layout>
