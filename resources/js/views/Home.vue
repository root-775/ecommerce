<script setup>
import { onMounted, ref } from 'vue';
import Slider from '../components/HomePage/Slider.vue';
import Product from '../components/Product.vue';
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
                    <Product :product="product" v-for="(product, index) in products"/>
                </ul>
            </div>
        </div>
    </div>
</template>
