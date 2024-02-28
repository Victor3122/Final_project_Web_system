<script setup>
defineProps({
    poster: Object
})
</script>
<template>
 <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div>
       <img class="rounded-t-lg" :src="poster.image" :alt="poster.title">
    </div>
    <div class="p-5">
       <RouterLink :to="{name: 'PosterDetails', params: {id: poster.id}}">
         <h5 class="mb-2 text-2x1 font-bold tracking-tight text=gray-900 dark:text-white">
           {{ poster.title }}
         </h5>
       </RouterLink>
      <span class="mr-4">{{ poster.description }}</span>
      <span>{{ poster.postdate }}</span>
    </div>
 </div>
</template>