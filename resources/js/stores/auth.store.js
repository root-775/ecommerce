import { defineStore } from "pinia";
import { computed, ref } from "vue";

export const useAuthStore = defineStore("auth", () => {
    const user = ref({"id": 1, "name" : "Testing "});
    // const user = ref({"id": 1, "name" : "Testing "});
    const is_login = computed(() => user.value.id == undefined ? false : true);
    function login () {
        console.log("login");
    }

    return { user, is_login, login};
});
// export const useAuthStore = defineStore("auth", {
//     state: () => ({
//         user: {},
//         is_login: false,
//         user_id: 0,
//     }),
//     getters : {

//     },
//     actions: {
//         login () {
//             this.user = {"name": "Amit Kumar"};
//         },
//         logout () {
//             this.user = {};
//         }
//     }
// })
