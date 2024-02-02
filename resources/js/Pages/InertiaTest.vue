<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const newTitle = ref('')
const newContent = ref('')
</script>

<template>
<div>
  <Link :href="route('inertia.index')">イナーシャテスト</Link><br>
  <Link :href="route('inertia.show', {id: 229})">イナーシャショウ</Link><br>
  <Link :href="route('inertia.create')">フォームテスト</Link>
  <div>
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}
    <Link as="button" method="post" :href="route('inertia.store')"
    :data="{title: newTitle, content: newContent}">保存テスト</Link>
  </div>
</div>
</template>


<style>

</style>