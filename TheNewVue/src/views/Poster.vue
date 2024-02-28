<template>
  <div class="container">
    <h1 class="products-logo-bigger products-logo-centered">PRODUCTS</h1>
    <div class="search-container">
      <input type="text" v-model="searchTerm" placeholder="Search by name..." class="form-control">
    </div>
    <div class="cards">
      <div v-for="product in filteredProducts" :key="product.id" class="card">
        <div class="card-image-container">
          <img :src="getImageUrl(product.image)" :alt="product.name" :style="{ height: product.height + 'px' }" class="card-image">
        </div>
        <div class="card-info">
          <h2 class="card-name">Name: {{ product.name }}</h2>
          <p class="card-description">Description: {{ product.description }}</p>
          <p class="card-price">Price: ${{ product.price }}</p>
          <!-- <div class="card-like-container">
            <button @click="toggleLike(product)" class="card-like-button">{{ product.liked ? 'Unlike' : 'Like' }}</button>
            <span class="card-like-count">{{ product.likes }}</span>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      products: [],
      searchTerm: ''
    };
  },
  mounted() {
    this.fetchProducts();
  },
  methods: {
    async fetchProducts() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/products');
        this.products = response.data.map(product => ({ ...product, liked: false }));
      } catch (error) {
        console.error('Error fetching products:', error);
      }
    },
    getImageUrl(imagePath) {
      return `http://127.0.0.1:8000/uploads/${imagePath}`;
    },
    toggleLike(product) {
      product.liked = !product.liked;
      if (product.liked) {
        product.likes++;
      } else {
        product.likes--;
      }
    }
  },
  computed: {
    filteredProducts() {
      return this.products.filter(product => product.name.toLowerCase().includes(this.searchTerm.toLowerCase()));
    }
  }
};
</script>

<style>
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  grid-gap: 20px;
}

.card {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card-image-container {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  margin-bottom: 10px;
}

.card-image {
  width: 100%;
  height: auto;
}

.card-info {
  margin-top: 10px;
}

.card-name {
  margin-bottom: 10px;
  font-size: 18px;
}

.card-description {
  margin-bottom: 10px;
  font-size: 14px;
}

.card-price {
  margin-bottom: 10px;
  font-size: 16px;
}

.card-like-container {
  display: flex;
  align-items: center;
}

.card-like-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 5px;
}

.card-like-button:hover {
  background-color: #0056b3;
}

.card-like-count {
  font-size: 14px;
  color: #6c757d;
}
.products-logo-bigger {
  font-size: 3rem;
  margin-bottom: 2rem;
}

.products-logo-centered {
  text-align: center;
}
</style>