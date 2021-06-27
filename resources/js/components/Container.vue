<template>
    <div class="container p-4 bg-gray-200">
        <Heading/>
        <Counter/>
        <ListVegetables/>
    </div>
</template>
<script>
// import axios from "axios";
// import { method } from "lodash";
import Heading from './Heading';
import Counter from './Counter';
import ListVegetables from './ListVegetables';

    export default {
        components: {
            'Heading' : Heading,
            'Counter'   : Counter,
            'ListVegetables' : ListVegetables
        }
    }
</script>
