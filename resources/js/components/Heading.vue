<template>
    <div class="flex items-center justify-end">
        <h1 class="my-5 text-3xl text-blue-600">{{ sayHello() }}</h1>
        <input class="mx-2 h-10 p-2" v-model="deepGreet" />
    </div>
</template>

<script>
export default {
    name: "Heading",
    data: () => ({
        deepGreet: "Hello Future",
    }),
    methods: {
        sayHello() {
            return this.deepGreet;
        },
    },
};
</script>
