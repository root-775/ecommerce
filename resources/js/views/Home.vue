<script setup>
import Slider from '../components/HomePage/Slider.vue';
<<<<<<< HEAD
import SingleProduct from '../components/SingleProduct.vue';
=======
import Product from '../components/Product.vue';
>>>>>>> 782ec0653ac1ba13dc3eba0dd7622bce3c53c906
import { useProductStore } from '../stores';
import { storeToRefs } from "pinia";

const productStore = useProductStore();
productStore.getAllProducts();
const { products } = storeToRefs(productStore);

</script>
<style scoped>
.thumbnails .span4 {
    margin: 4px 5px 4px 4px !important;
}
</style>
<template>
    <div class="span9">
        <Slider />
        <div class="well well-small">
            <h3>New Products</h3>
            <div class="row-fluid">
                <ul class="thumbnails">
<<<<<<< HEAD
                    <SingleProduct :product="product" v-for="(product, index) in products.slice(0, 15)"/>
=======
                    <Product :product="product" v-for="(product, index) in products"/>
>>>>>>> 782ec0653ac1ba13dc3eba0dd7622bce3c53c906
                </ul>
            </div>
        </div>
    </div>
</template>
