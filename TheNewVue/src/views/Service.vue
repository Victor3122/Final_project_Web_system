<!-- <script setup>

</script>

<template>
<h1>About</h1>
</template> -->


<!-- <template>
    <div class="about">
      <div class="container">
        <h1 class="text-center mb-5">Services</h1>
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-center mb-3">Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo, velit et pharetra rhoncus, mi lacus venenatis nisl, vel aliquet lorem nisi et sapien. Sed bibendum turpis ac orci efficitur, a bibendum velit eleifend.</p>
            <img src="../assets/ss.jpg" class="img-fluid rounded-lg mb-4" alt="Team Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo, velit et pharetra rhoncus, mi lacus venenatis nisl, vel aliquet lorem nisi et sapien. Sed bibendum turpis ac orci efficitur, a bibendum velit eleifend.</p>
          </div>
          <div class="col-md-6">
            <h2 class="text-center mb-3">Our Vision</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo, velit et pharetra rhoncus, mi lacus venenatis nisl, vel aliquet lorem nisi et sapien. Sed bibendum turpis ac orci efficitur, a bibendum velit eleifend.</p>
            <img src="https://via.placeholder.com/500x300" class="img-fluid rounded-lg mb-4" alt="Vision Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo, velit et pharetra rhoncus, mi lacus venenatis nisl, vel aliquet lorem nisi et sapien. Sed bibendum turpis ac orci efficitur, a bibendum velit eleifend.</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <style scoped>
  .about {
    padding: 5rem 0;
  }
  
  .about h1 {
    font-size: 3rem;
    font-weight: bold;
    color: #333;
  }
  
  .about h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
  }
  
  .about p {
    font-size: 1.2rem;
    color: #666;
  }
  
  .about img {
    max-width: 100%;
    height: auto;
  }
  </style>

<script>

</script> -->







<template>
  <br>
  <div>
    <h1 class="text-center mb-5 font-bold" style="font-size: 70px; ">Services</h1>
  </div>

  
  <div
    :class="[
      'w-full overflow-hidden flex flex-col items-start justify-start tracking-normal',
      screenSize === 'mq750' ? 'px-0' : 'px-5',
      screenSize === 'mq1050' ? 'justify-center' : 'justify-start',
      screenSize === 'mq750' ? 'py-10' : 'py-0',
      screenSize === 'mq750' ? 'pb-0' : 'pb-0',
      screenSize === 'mq750' ? 'box-border' : '',
      screenSize === 'mq750' ? 'gap-80px_0px' : '',
      screenSize === 'mq750' ? 'grid-cols-repeat(3,_minmax(268px,_1fr))' : '',
      screenSize === 'mq1050' ? 'grid-cols-repeat(2,_minmax(268px,_464px))' : '',
    ]"
  >
    <section
      class="self-stretch bg-white flex flex-col items-center justify-start pt-6 px-0 pb-0 box-border max-w-full"
    >
      <div
        class="self-stretch flex flex-col items-center justify-start py-10 px-5 box-border min-h-[553px] max-w-full mq750:gap-[80px_0px] mq750:pt-[26px] mq750:pb-[26px] mq750:box-border mq1125:gap-[80px_0px]"
      >
        <div
          class="w-full flex flex-col items-center justify-start max-w-full mq750:gap-[40px_0px]"
        >
          <div
            class="self-stretch grid flex-row items-start justify-start gap-[0px_25px] max-w-full grid-cols-[repeat(3,_minmax(268px,_1fr))] mq750:grid-cols-[minmax(268px,_1fr)] mq1050:justify-center mq1050:grid-cols-[repeat(2,_minmax(268px,_464px))]"
          >
            <Article
              imgContainer="/1.jpg"
              waysToDecorYourHomeLikeAP="Quality Guarantee"
            />
            <Article
              imgContainer="/2.jpg"
              waysToDecorYourHomeLikeAP="Delivery Ease"
            />
            <Article
              imgContainer="/3.jpg"
              waysToDecorYourHomeLikeAP="Best Employee Service"
            />
          </div>
        </div>
      </div>
    </section>
  </div>

  <section
      class="self-stretch bg-neutral-02-100 flex flex-row flex-wrap items-start justify-center py-4 px-40 gap-[0px_24px] mq450:pl-5 mq450:pr-5 mq450:box-border mq750:pl-20 mq750:pr-20 mq750:box-border" style="background-color: rgb(231, 228, 228);"
    >
      <Card
        shippingAndDeliveryoutlin="/shipping-and-deliveryoutlinefast-delivery.svg"
        freeShipping="Delivery Services"
        orderAbove200="Free Delivery within Yangon"
      /><Card
        shippingAndDeliveryoutlin="/finance-and-paymentoutlinemoney.svg"
        freeShipping="Guarantee"
        orderAbove200="2 months Guarantee"
        propAlignSelf="stretch"
      /><Card
        shippingAndDeliveryoutlin="/interfaceoutlinelock-01.svg"
        freeShipping="Payment Methods"
        orderAbove200="K Pay, WAVE"
        propAlignSelf="stretch"
      /><Card
        shippingAndDeliveryoutlin="/communicationoutlinecall.svg"
        freeShipping="24 hour Support"
        orderAbove200="Phone and Email support"
        propAlignSelf="stretch"
      />
  </section>

</template>
<script>
  import { defineComponent } from "vue";
  import Article from "../components/Article.vue";
  import Card from "../components/Card.vue";

  export default defineComponent({
    name: "Service",
    components: { Article, Card },

    data() {
    return {
      screenSize: "",
    };
  },
  mounted() {
    this.updateScreenSize();
    window.addEventListener("resize", this.updateScreenSize);
  },
  methods: {
    updateScreenSize() {
      if (window.innerWidth >= 1125) {
        this.screenSize = "mq1050";
      } else if (window.innerWidth >= 750) {
        this.screenSize = "mq750";
      } else {
        this.screenSize = "";
      }
    },
  }
  });
</script>

