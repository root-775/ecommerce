<script setup>
import { useCategoryStore } from '../stores';
import { storeToRefs } from 'pinia';
const categoryStore = useCategoryStore();
categoryStore.getCategory();
const { category } = storeToRefs(categoryStore);
</script>
<template>
    <li v-for="cat in category">
        <router-link :to="{name : 'singleCategory' , params: {'slug' : cat.slug}}">{{ cat.name }}</router-link>
    </li>
</template>
