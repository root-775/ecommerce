<script setup>

const {product} = defineProps([
    "product"
]);


</script>
<template>
    <li class="span4">
        <div class="thumbnail">
            <!-- <router-link></router-link> -->
            <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK
                VIEW</a>
            <a href="product_details.html"><img :src="product.image" alt="" /></a>
            <div class="caption cntr">
                <p>{{ product.title }}</p>
                <p><strong> {{ product.price }}</strong></p>
                <h4>
                    <a class="shopBtn" href="#" title="add to cart">
                        Add to cart
                    </a>
                </h4>
                <div class="actionList">
                    <a class="pull-left" href="#">Add to Wish List </a>
                    <a class="pull-left" href="#"> Add to Compare </a>
                </div>
                <br class="clr" />
            </div>
        </div>
    </li>
</template>
