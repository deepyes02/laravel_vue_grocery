<template>
    <div class="p-3 gap-3 flex justify-start">
        <input type="text" id="name" name="name" placeholder="Name">
        <input type="text" id="description" name="description" placeholder="description">
        <input type="number" id="price" name="price" placeholder="price">
        <DefaultButton buttonText="Post Vegetables" v-on:click="postVegetables()"/>
    </div>
</template>

<script>
import DefaultButton from './DefaultButton';

export default {
    components: {
        "DefaultButton" : DefaultButton
    },
    name: "PostVegetables",
    data: () => ({
       products: {name: null, description:null, price:null,slug:null}
    }),
    methods: {
        postVegetables: function () {
            const name = document.querySelector('#name');
            const description = document.querySelector('#description');
            const price = document.querySelector('#price');
            if(!name.value || !description.value || !price.value){
                console.log("One or more input is empty")
            } else {
                this.products.name = name.value;
                this.products.description = description.value;
                this.products.price = price.value;
                this.products.slug = this.products.name.split(' ').join('-').toLocaleLowerCase();
                axios.post(`http://laravel-vue.test/api/products`, {
                    name: this.products.name,
                    description: this.products.description,
                    price: this.products.price,
                    slug: this.products.slug
                })
                .then(function (response){
                    console.log(response)
                })
                .catch(function(error){
                    console.log(error)
                })
            }

        }
    }
}
</script>
