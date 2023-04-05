import { defineStore } from "pinia";
import { fetchWrapper } from '../halpers/fetch-wrapper.js';
import { ref } from "vue";

const baseUrl = `${window.website.url}/api/product`;

export const useProductStore = defineStore("product", () => {
    const products = ref({});
    async function getAllProducts() {
        try {
            const result = await fetchWrapper.get(baseUrl);
            this.products = result.data;
        } catch (error) {
            this.products = { error };
        }
        console.log("getAllProducts");

    }

    async function getSingleProduct(id) {
        try {
            const result = await fetchWrapper.get(`${baseUrl}/${id}`);
            this.products = result.data;
        } catch (error) {
            this.products = { error };
        }
        console.log("getSingleProduct");
    }

    return { products, getAllProducts, getSingleProduct}
});
