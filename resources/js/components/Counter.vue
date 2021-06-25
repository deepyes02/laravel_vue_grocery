<template>
    <div class="flex p-3">
        <h3 class="my-4 text-2xl text-gray-600">You've pressed the button {{ count <= 1 ? count + ' time' : count + ' times' }}</h3>
		<DefaultButton buttonText="Press" v-on:click="increaseCounter"/>
		<DefaultButton buttonText="Reset" v-on:click="resetCounter"/>

    </div>
</template>

<script>

import DefaultButton from './DefaultButton';
export default {
	components: {
		'DefaultButton' : DefaultButton
	},
    name: "Counter",
    data: () => ({
        count: 0,
    }),
    methods: {
        increaseCounter() {
            this.count++;
        },
		resetCounter(){
			this.count = 0;
		}
    },
};
</script>
