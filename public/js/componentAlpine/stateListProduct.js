function stateListProduct() {
    return {
        listProduct: [], // membuat array untuk menampung data dari backend
        listProductOnCart: [], // membuat array untuk menampung data produk didalam keranjang
        init() {
            this.getListProduct()
        },
        async getListProduct() {
            try {
                let result = await axios.get('list-products')
                this.listProduct = result.data.data
                // console.log('fungsi untuk mengambil data dari be', this.listProduct)
            } catch (error) {
                console.log('error', error)
            }
        },
        // membuat fungsi event click untuk tambah data produk kedalam keranjang
        addProductToCart(product) {
            // mengecek data produk ada atau tidak didalam keranjang
            let existProduct = this.listProductOnCart.find(item => item.id === product.id)

            // mengecek data existProduct
            if(existProduct) {
                existProduct.qty  += 1
            } else {
                // memasukkan produk kedalam keranjang
                this.listProductOnCart.push({
                    ...product, // meletakkan data produk
                    qty: 1, // qty sebagai dalam array
                    stock: product.stocks[0].quantity ?? 0 // menampung jumlah stok dari produk
                })
            }
            console.log('tombol untuk tambah produk kedalam keranjang', product)
        },
     }
}
