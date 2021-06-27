<template>
    <div class="px-10 bg-gray-200">
        <Heading/>
        <Counter/>
        <ListVegetables/>
        <PostVegetables/>
    </div>
</template>
<script>
// import axios from "axios";
// import { method } from "lodash";
import Heading from './Heading';
import Counter from './Counter';
import ListVegetables from './ListVegetables';
import PostVegetables from './PostVegetables';

export default {
    components: {
        'Heading': Heading,
        'Counter': Counter,
        'ListVegetables': ListVegetables,
        'PostVegetables': PostVegetables
    }
}
</script>
