<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  blogs: Array
})
</script>
<template>
<div>
  <div v-if="$page.props.flash.message" class="alert">
    {{ $page.props.flash.message }}
  </div>
  <ul>
    <li v-for="blog in blogs" :key="blog.id">
    タイトル : <Link :href="route('inertia.show', {id: blog.id})">{{ blog.title }}</Link>
    コンテンツ : {{ blog.content }}
    </li>
  </ul>
</div>
</template>


<style>

</style>