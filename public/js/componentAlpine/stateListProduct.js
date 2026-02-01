function stateListProduct() {
    return {
        // membuat array untuk menampung data dari backend
        listProduct: [],

        // membuat array untuk menampung data produk didalam keranjang
        listProductOnCart: [],

        // menampung data order product yang akan dibayar sesuai dengan jumlah produk yang dibeli
        dataOrderProduct: { amount: '', order_product: [] },

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
        },
        decrementQty(product){
           if (product.qty > 1) {
                product.qty--
           }
        },
        incrementQty(product) {
            if(product.qty < product.stock) {
                product.qty++
             }
        },
        // ketika 1 objek produk didalam
        productInCart(productId) {
            return this.listProductOnCart.some(item=> item.id == productId)
        },
        // fungsi untuk melakukan cek jumlah uang cash yang dikasi customer
        payNow() { console.log('tombol untuk melakukan pembayaran..') },
        removeProductFromCart(productId) {
           if(!productId) return

           // jika ada product id yang dipilih maka akan dihapus dari cart
           this.listProductOnCart = this.listProductOnCart.filter(item => item.id !== productId)
        }
     }
}
