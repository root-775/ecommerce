import { defineStore } from "pinia";
import { ref } from "vue";
import { fetchWrapper } from '../halpers/fetch-wrapper.js';

const baseUrl = `${window.website.url}/api/category`;

export const useCategoryStore = defineStore("category", () => {
    const category = ref();
    async function getCategory() {
        try {
            const result = await fetchWrapper.get(baseUrl);
            this.category = result.data;
        } catch (error) {
            this.category = { error };
        }
    }
    return { category, getCategory}
});



