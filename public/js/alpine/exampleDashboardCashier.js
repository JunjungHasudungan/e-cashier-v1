
function exampleDashboardCashier() {
    return {
        products: [],
        listProductOnCart: [],
        dataOrderProduct: { amount: '', order_product: [] },
        messageError: '',
        async getListProduct() {
            try {
                let result = await axios.get('/example-getListProduct')
                this.products = result.data.data
            } catch (error) {
                console.log('error', error)
            }
        },
        addToCart(product) {
            // temukan data product terlebih dahulu
           let existing = this.listProductOnCart.find(item => item.id === product.id)
            if (existing) {
                existing.qty += 1
            } else {
                this.listProductOnCart.push({
                    ...product,
                    qty: 1,
                    stock: product.stocks[0]?.quantity ?? 0
                })
            }
        },
        removeProductFromCart(productId) {
            if (!productId) return
            this.listProductOnCart = this.listProductOnCart.filter(item => item.id !== productId)
        },
        productInCart(productId) {
            return this.listProductOnCart.some(item => item.id == productId)
        },
        incrementQty(product) {
            if (product.qty < product.stock) {
                product.qty++
            }
        },
        decrementQty(product) {
            if (product.qty > 1) product.qty--
        },
        async payNow() {

            // mengambil jumlah amount dari seluruh order produk
            let totalAmountOrder = this.listProductOnCart.reduce((tempSum, itemProduct)=> { // tempSum sebagai tempat menampung penjumlahan
                return tempSum + parseInt(parseFloat(itemProduct.price) * itemProduct.qty) // itemProduct sebagai objek yang telah diloop
            },0)
            
            // melakukan pengecekan bila  jumlah_pembayaran lebih kecil dari total semua barang
            if(this.dataOrderProduct.amount < totalAmountOrder) {
                this.messageError = "uang tidak cukup"
                return
            }

            // melakukan reset nilai array menjadi kosong terlebih dahulu
            this.dataOrderProduct.order_product = []; // reset dulu

            // membongkar semua orderan menggunakan foreach karna nilai berbentuk array
           this.listProductOnCart.forEach(itemProduct => {
                
                // memasukkan nilai objek itemProduct kedalam array order_product
                this.dataOrderProduct.order_product.push({
                    // memasukkan nilai kedalam 
                    product_id: itemProduct.id,
                    quantity: itemProduct.qty,
                    amount: itemProduct.qty * parseFloat(itemProduct.price)
                });
           })

            // membuat objek yang akan dikirim ke BE
            let sendDataOrderProduct = {
                // menampung jumlah pe
                total_amount: this.dataOrderProduct.amount,
                order_product: this.dataOrderProduct.order_product
            }

            const result = await axios.post('store-order-product', sendDataOrderProduct)

        },
        init() {
            this.getListProduct();
        }
    }
}
