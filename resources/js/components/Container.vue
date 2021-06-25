<template>
    <div class="container p-4 bg-blue-200">
    <h1 class="my-5 text-3xl text-blue-600">{{ sayHi() }}</h1>
    <h3 class="my-4 text-2xl text-green-600">You counter Value {{counter}}</h3>
    <button v-on:click="increaseCounter()" class="p-3 block w-20 mx-auto justify-end text-white bg-green-800">Hit</button>
        <ul>
            <li v-for="product in products">{{product}}</li>
        </ul>
    </div>
</template>
<script>
import axios from "axios";
import { method } from "lodash";

    export default {
        data: () => ({
            greeting: "Hey how are you?",
            counter: 1,
            products: []
        }),
        methods: {
            sayHi() {
                return this.greeting;
            },
            increaseCounter() {
                this.counter++;
            },
        },
        created: function () {
            axios.get('http://laravel-vue.test/api/products')
                .then(response => {
                    response = response.data;
                    response.forEach(elem => {
                        this.products.push(elem.name)
                    })
                })
        }
    }
</script>
