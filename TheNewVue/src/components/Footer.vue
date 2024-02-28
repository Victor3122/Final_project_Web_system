<template>
    <footer class="bg-white border-gray-200 dark:bg-gray-900">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
          <!-- <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Vue</span>
          </a> -->
          
            <router-link to="/" class="mr-4 hover:underline md:mr-6">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="color: white;">
                TRSE
              </span>
            </router-link>
          

          <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
            <li>
              <router-link to="/" class="mr-4 hover:underline md:mr-6" style="color: white;">Home</router-link>
            </li>
            <li>
              <router-link to="/poster" class="mr-4 hover:underline md:mr-6" style="color: white;">Products</router-link>
            </li>
            <li>
              <router-link to="/about" class="mr-4 hover:underline md:mr-6" style="color: white;">About</router-link>
            </li>
            <li>
              <router-link to="/service" class="hover:underline" style="color: white;">Service</router-link>
            </li>
          </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400" style="color: white;">
          © 2024 TRSE. All Rights Reserved.</span>
      </div>
    </footer>
  </template>
  
  <style scoped>
  footer {
    padding: 2rem 0;
    background-color: black;
  }
  
  footer a {
    color: #333;
  }
  
  footer a:hover {
    color: #555;
  }
  
  footer a.router-link-exact-active {
    color: #555;
  }
  
  footer hr {
    border-color: #ddd;
  }
  </style>