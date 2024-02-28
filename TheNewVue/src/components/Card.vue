<template>
    <div
      class="flex-1 bg-neutral-02-100 flex flex-col items-start justify-start py-12 px-8 box-border gap-[16px_0px] min-w-[218px] max-w-[262px] text-left text-xl text-neutral-07-100 font-caption-2-bold"
    >
      <img
        class="w-12 h-12 relative overflow-hidden shrink-0"
        loading="eager"
        alt=""
        :src="shippingAndDeliveryoutlin"
      />
      <div
        class="self-stretch flex flex-col items-start justify-start gap-[8px_0px]"
      >
        <h3
          class="m-0 relative text-inherit leading-[28px] font-medium font-inherit mq450:text-base mq450:leading-[22px]"
        >
          {{freeShipping}}
        </h3>
        <div
          class="relative text-sm leading-[24px] text-neutral-04-100"
          :style="orderAbove200Style"
        >
          {{orderAbove200}}
        </div>
      </div>
    </div>
  </template>
  <script>
    import { defineComponent } from "vue";
  
    export default defineComponent({
      name: "Card",
      props: {
        shippingAndDeliveryoutlin: { type: String },
        freeShipping: { type: String },
        orderAbove200: { type: String },
        propAlignSelf: { type: String },
      },
      computed: {
        orderAbove200Style() {
          return {
            alignSelf: this.propAlignSelf,
          };
        },
      },
    });
  </script>