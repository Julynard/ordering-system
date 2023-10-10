<template>
    <div class="card mt-5 mb-5 p-5 ">
        <form action="/products" method="post" class="d-flex justify-content-between" @submit="addProduct">
            <input class="form-control m-2" type="text" name="name" v-model="product.name" placeholder="Product name">
            <input class="form-control m-2" type="number" name="price" v-model="product.price" placeholder="Product price">
            <button class="btn btn-primary m-2" type="submit">Add</button>
        </form>
    </div>
</template>


<script>
export default {
    name: 'ProductForm',
    props: {
        product: Object,
    },
    methods: {
        addProduct(event) {
            event.preventDefault();

            // For example, using Axios:
            axios.post('/api/products', {
                name: this.product.name,
                price: this.product.price,
            })
            .then(response => {
                // Success!
                console.log(response);
            })
            .catch(error => {
                // Error!
                console.log(error);
            });
        },
    },
};
</script>