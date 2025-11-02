function stateListProduct() {
    return {
        // membuat array untuk menampung data dari backend
        listProduct: [],
        init() {
            this.getListProduct()
        },
        async getListProduct() {
            try {
                let result = await axios.get('list-products')
                console.log('fungsi untuk mengambil data dari be', result)
            } catch (error) {
                console.log('error', error)
            }
           
        }
    }
}