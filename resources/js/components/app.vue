<template>
    <div class="mx-auto my-5 p-6 max-w-sm bg-gray-200 rounded-xl shadow-md flex items-center space-x-4">
        <div>
            <div class="p-1 text-xl font-medium text-black">Grocery List</div>
            <add-item-form/>
            <list-view v-bind:items="items"/>
        </div>
    </div>

</template>

<script>
import addItemForm from "./addItemForm";
import listView from "./listView";
export default {
    components: {
        addItemForm,
        listView
    },
    data: function()
    {
        return {
            items: []
        }
    },
    methods: {
        getList: function () {
            axios.get('/api/products')
                .then(function (response) {
                    console.log(response);
                }).catch(function (err) {
                console.log(err)
            })
        }
    },
    created(){
        this.getList();
    }


}
</script>
