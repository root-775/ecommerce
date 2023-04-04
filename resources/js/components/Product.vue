<script setup>

const {product} = defineProps([
    "product"
]);


</script>
<template>
    <li class="span4">
        <div class="thumbnail">
            <router-link class="zoomTool" :to="{name: 'productDetails', params: {'slug': product.slug, 'id': product.id}}" title="add to cart">
                <span class="icon-search"></span> QUICK VIEW
            </router-link>
            <router-link :to="{name: 'productDetails', params: {'slug': product.slug, 'id': product.id}}"><img :src="product.image" alt="" /></router-link>
            <div class="caption cntr">
                <p>{{ product.title }}</p>
                <p><strong> {{ product.price }}</strong></p>
                <h4>
                    <router-link :to="{name: 'productDetails', params: {'slug': product.slug, 'id': product.id}}" class="shopBtn" title="add to cart">
                            Add to cart
                    </router-link>
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
