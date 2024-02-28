<script setup>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
</script>

<template>
  
    <div class="max-w-7x1 mx-auto">
        <Navbar />
      <RouterView />
      <Footer />
    </div>
</template>



