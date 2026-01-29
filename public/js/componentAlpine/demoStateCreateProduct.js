function demoStateCreateProduct() {
    return {
        product: { name: '', quantity: '', price: '', size: '', description: '' },
        btnCancel() {
            // mengambil beberapa data dari objek
            let anyFieldProduct = Object.values(this.product).some(value=> value !== '')
            if(anyFieldProduct) {
                let confirmation = confirm('yakin membatalkan?')
                if(confirmation) { 
                    window.location.href= 'dashboard-admin'
                }
                return
            }
            window.location.href= 'dashboard-admin'
        }
    }
}
