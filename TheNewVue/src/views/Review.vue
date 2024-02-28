<template>
    <div class="container">
      <h1 class="products-logo">PRODUCTS REVIEW</h1>
      <div class="search-container">
        <input type="text" v-model="searchTerm" placeholder="Search by name..." class="form-control">
      </div>
      <div class="cards">
        <div v-for="product in filteredProducts" :key="product.id" class="card">
          <div class="card-image-container">
            <img :src="getImageUrl(product.image)" :alt="product.name" class="card-image">
          </div>
          <div class="card-info">
            <h2 class="card-name">{{ product.name }}</h2>
            <p class="card-description">{{ product.description }}</p>
            <p class="card-price">Price: ${{ product.price }}</p>
            <div class="card-like-container">
              <button @click="toggleLike(product)" class="card-like-button">{{ product.liked ? 'Unlike' : 'Like' }}</button>
              <span class="card-like-count">{{ product.likes }}</span>
            </div>
            <div class="card-review-container">
              <h3>Reviews</h3>
              <div v-if="product.reviews.length" class="card-reviews">
                <div v-for="review in product.reviews" :key="review.id" class="card-review">
                  <p>{{ review.text }}</p>
                  <p class="review-author">Author: {{ review.author }}</p>
                </div>
              </div>
              <form @submit.prevent="addReview(product)" class="add-review-form">
                <textarea v-model="newReview" placeholder="Write a review..." class="form-control"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
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
        searchTerm: '',
        newReview: '',
      };
    },
    mounted() {
      this.fetchProducts();
    },
    methods: {
      async fetchProducts() {
        try {
          const response = await axios.get('http://127.0.0.1:8000/api/products');
          this.products = response.data.map(product => ({ ...product, liked: false, reviews: [] }));
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
      },
      addReview(product) {
        const review = {
          id: product.reviews.length + 1,
          text: this.newReview,
          author: 'Anonymous',
        };
        product.reviews.push(review);
        this.newReview = '';
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
  
  .products-logo {
    text-align: center;
    font-size: 36px;
    margin-bottom: 20px;
  }
  
  .search-container {
    margin-bottom: 20px;
  }
  
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 20px;
  }
  
  .card {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .card-image-container {
    text-align: center;
  }
  
  .card-image {
    max-width: 100%;
    height: auto;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
  }
  
  .card-info {
    padding: 20px;
  }
  
  .card-name {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .card-description {
    margin-bottom: 10px;
  }
  
  .card-price {
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .card-like-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }
  
  .card-like-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .card-like-button:hover {
    background-color: #0056b3;
  }
  
  .card-like-count {
    margin-left: 5px;
  }
  
  .card-review-container {
    margin-top: 20px;
  }
  
  .card-reviews {
    margin-bottom: 10px;
  }
  
  .card-review {
    background-color: #f9f9f9;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
  }
  
  .review-author {
    font-style: italic;
  }
  </style>
  