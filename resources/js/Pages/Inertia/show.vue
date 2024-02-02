<script setup>
import { Inertia } from '@inertiajs/inertia';

defineProps({
  id: String,
  blog: Object
})

const deleteConfirm = id => {
  Inertia.delete(`/inertia-delete/${id}`, {
    onBefore: () => confirm('本当に削除しますか?')
  })
}
</script>

<template>
  <div>
    {{ id }}<br>
    {{ blog.title }}
    <button @click="deleteConfirm(blog.id)">削除ボタン</button>
  </div>
</template>