<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
<div>
  <Link :href="route('inertia.index')">イナーシャテスト</Link><br>
  <Link :href="route('inertia.show', {id: 229})">イナーシャショウ</Link>
</div>
</template>


<style>

</style>