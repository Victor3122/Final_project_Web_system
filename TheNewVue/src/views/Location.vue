<template>
  <div class="container">
    <h1 class="products-logo-bigger">Locations</h1>
    <div class="cards">
      <div v-for="location in locations" :key="location.id" class="card">
        <div class="card-info">
          <h2 class="card-name">{{ location.city }}</h2>
          <p class="card-description">{{ location.address }}</p>
          <p class="card-price">Phone Number: {{ location.phone_number }}</p>
          <p class="card-price">Email: {{ location.email }}</p>
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
      locations: []
    };
  },
  mounted() {
    this.fetchLocations();
  },
  methods: {
    async fetchLocations() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/locations');
        this.locations = response.data;
      } catch (error) {
        console.error('Error fetching locations:', error);
      }
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

.products-logo-bigger {
  font-size: 3rem;
  margin-bottom: 2rem;
}

.products-logo-centered {
  text-align: center;
}
</style>