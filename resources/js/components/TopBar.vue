<script setup>
import { RouterLink } from 'vue-router'
import ChangeTheme from '@/components/ChangeTheme.vue';
import ChangeLocale from '@/components/ChangeLocale.vue'
</script>

<template>
	<nav>
		<RouterLink to="/" class="menu-link">{{ $t('page.Home') }}</RouterLink>
		<RouterLink to="/about" class="menu-link">{{ $t('page.About') }}</RouterLink>
		<RouterLink to="/error404" class="menu-link">404</RouterLink>
		<div class="right">
			<ChangeLocale />
			<ChangeTheme />
		</div>
	</nav>
</template>

<style scoped>
.right {
	display: inline;
	float: right;
	margin: 10px;
	padding: 5px;
}
</style>