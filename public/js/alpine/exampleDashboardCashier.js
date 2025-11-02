
function exampleDashboardCashier() {
    return {
        products: [],
        listProductOnCart: [],
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
        payNow() {
            console.log('btn membayar')
        },
        init() {
            this.getListProduct();
        }
    }
}
