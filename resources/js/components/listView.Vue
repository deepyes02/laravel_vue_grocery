<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-item
                :item="item"
                class="item"
                />
        </div>
    </div>
</template>


<script>
import  listItem from './listItem';
export default{
    components: {
        listItem
    },
    props: ["items"],
}
</script>
