
function exampleDashboardCashier() {
    return {
        products: [],
        listProductOnChart: [],
        async getListProduct() {
            try {
                let result = await axios.get('/example-getListProduct')
                this.products = result.data.data
            } catch (error) {
                console.log('error', error)
            }
        },
        addToChart(product) {
            // temukan data product terlebih dahulu
           let existing = this.listProductOnChart.find(item => item.id === product.id)
            if (existing) {
                existing.qty += 1
            } else {
                this.listProductOnChart.push({
                    ...product,
                    qty: 1,
                    stock: product.stocks[0]?.quantity ?? 0
                })
            }
            console.log(this.listProductOnChart)
        },
        incrementQty(product) {
            if (product.qty < product.stock) product.qty++
        },
        decrementQty(product) {
            if (product.qty > 1) product.qty--
        },
        init() {
            this.getListProduct();
        }
    }
}
