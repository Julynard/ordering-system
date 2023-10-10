<template>
    <div class="card rounded p-5">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.name }}</td>
                <td>{{ product.price }}</td>
                <td>
                <!-- <router-link :to="'/products/' + product.id">View</router-link>
                <router-link :to="'/products/' + product.id + '/edit'">Edit</router-link>
                <router-link :to="'/products/' + product.id + '/delete'">Delete</router-link> -->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'ProductList',
    props: {
        products: Array,
    },
};
</script>