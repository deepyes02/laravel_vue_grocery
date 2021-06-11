<template>
<div>
    <input name="name" class="mb-1 p-1 bg-yellow-50" type="text" v-model="item.name" title="name" placeholder="Type a Name"/>
    <input name="slug" class="mb-1 p-1 bg-yellow-50" type="text" v-model="item.slug" title="name" placeholder="slug"/>
    <input name="price" class="mb-1 p-1 bg-yellow-50" type="number" v-model="item.price" title="name" placeholder="price"/>
    <textarea name="description" class="mb-1 p-1 bg-yellow-50" type="text" v-model="item.description" title="name" placeholder="short description"></textarea>
    <button v-on:click="logData()" class="p-2 my-4 bg-gray-600 text-white block hover:text-yellow-400">Save</button>

</div>
</template>


<script>
export default{
    data: function () {
        return {
            item: {
                name: null,
                slug: null,
                price: null,
                description: null
            }
        }
    },
    "methods":{
        logData() {
            if (this.item.name === null || this.item.slug === null) {
                return;
            }
            axios.post(`/api/products`, {
                name: this.item.name,
                slug: this.item.slug,
                price: this.item.price,
                description: this.item.description
            })
            .then(response=>{
                console.log(response)
            }).catch(err => console.log(err));
        }
    }

}
</script>
