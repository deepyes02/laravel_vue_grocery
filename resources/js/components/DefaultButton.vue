<template>
	<button class="p-3 block mx-auto my-5 justify-end text-white bg-green-800">{{buttonText}}</button>
</template>

<script>
export default {
	name: 'DefaultButton',
	props: ['buttonText']
}
</script>