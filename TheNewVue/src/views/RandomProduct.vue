<template>
    <div class="container">
      <h1 class="products-logo-bigger products-logo-centered">RECOMMENDED PRODUCT</h1>
      <div class="card" v-if="randomProduct">
        <div class="card-image-container">
          <img :src="getImageUrl(randomProduct.image)" alt="Product Image" class="card-image">
        </div>
        <div class="card-info">
          <h3 class="card-name">Name: {{ randomProduct.name }}</h3>
          <p class="card-description">Description: {{ randomProduct.description }}</p>
          <p class="card-price">Price: ${{ randomProduct.price }}</p>
          <div class="card-like-container">
            <button @click="toggleLike(randomProduct)" class="card-like-button">{{ randomProduct.liked ? 'Unlike' : 'Like' }}</button>
            <span class="card-like-count">{{ randomProduct.likes }}</span>
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
        randomProduct: null
      };
    },
    mounted() {
      this.fetchRandomProduct();
    },
    methods: {
      async fetchRandomProduct() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/products');
          const randomIndex = Math.floor(Math.random() * response.data.length);
          this.randomProduct = { ...response.data[randomIndex], liked: false };
        } catch (error) {
          console.error('Error fetching random product:', error);
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
    }
  };
  </script>
  
  <style>
  .random-product-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
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