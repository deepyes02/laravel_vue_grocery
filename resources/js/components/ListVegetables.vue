<template>
    <div class="p-5">
        <ul class="bg-gray-300 p-5">
            <div class="flex gap-2 items-center">
                <h3 class="text-2xl">Get List of Vegetables from Database</h3>
                <DefaultButton
                    buttonText="Get Vegetables"
                    v-on:click="getVegetables()"
                />
            </div>
            <li
                class="text-black-800"
                v-for="(product, index) in products"
                v-bind:key="index"
            >
                {{ product }}
            </li>
        </ul>
    </div>
</template>

<script>
import DefaultButton from "./DefaultButton";
export default {
    components: {
        'DefaultButton': DefaultButton,
    },
    name: "ListVegetables",

    data: () => ({
        products: [],
    }),
    methods: {
        getVegetables: function () {
            axios
                .get("http://laravel-vue.test/api/products")
                .then((response) => {
                    response = response.data;
                    console.log(response);
                    this.products = [];
                    response.forEach((elem) => {
                        this.products.push(elem.name);
                    });
                });
        },
    },
};
</script>
