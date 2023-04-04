import { defineStore } from "pinia";
import { fetchWrapper } from '../halpers/fetch-wrapper.js';
import { ref } from "vue";

<<<<<<< HEAD
const baseUrl = `${window.website.apiUrl}/product`;
=======
const baseUrl = `${window.website.url}/api/product`;
>>>>>>> 782ec0653ac1ba13dc3eba0dd7622bce3c53c906

export const useProductStore = defineStore("product", () => {
    const products = ref({});
    async function getAllProducts() {
        try {
            const result = await fetchWrapper.get(baseUrl);
            this.products = result.data;
        } catch (error) {
            this.products = { error };
        }
    }

<<<<<<< HEAD
    return { products, getAllProducts}
=======
    async function getSingleProduct(id) {
        try {
            const result = await fetchWrapper.get(`${baseUrl}/${id}`);
            this.products = result.data;
        } catch (error) {
            this.products = { error };
        }
    }

    return { products, getAllProducts, getSingleProduct}
>>>>>>> 782ec0653ac1ba13dc3eba0dd7622bce3c53c906
});
