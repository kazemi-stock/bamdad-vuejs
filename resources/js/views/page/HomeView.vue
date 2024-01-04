<script setup>
import TopMenu from '@/components/TopBar.vue'
import PageTitle from '@/components/PageTitle.vue';
import HelloWorld from '@/components/HelloWorld.vue';
import { ref } from 'vue';

let email = ref('')
let country = ref(48)
</script>

<template>
	<PageTitle :title="'page.Home'" />
<!--	<TopMenu />-->

	<HelloWorld/>
</template>

<style>
div.form
{
    display: block;
    text-align: center;
}

form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
	margin-top: 50px;
    text-align: left;
	width: 90%;
	max-width: 480px;
}
</style>
