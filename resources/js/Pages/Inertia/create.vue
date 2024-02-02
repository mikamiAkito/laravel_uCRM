<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

defineProps({
  errors: Object
})

const form = reactive({
  title: null,
  content: null
})

const submit = () => {
  router.post('/inertia-store', form)
}
</script>

<template>
  <div>
    <form @submit.prevent="submit">
      <input type="text" name="title" v-model="form.title">
      <div v-if="errors.title">{{ errors.title }}</div>
      <input type="text" name="content" v-model="form.content">
      <div v-if="errors.content">{{ errors.content }}</div>
      <button>送信</button>
    </form>
  </div>
</template>