<template>
    <div
      class="flex flex-col items-start justify-start gap-[24px_0px] max-w-full text-left text-xl text-neutrals-2 font-caption-2-bold"
    >
      <img
        class="self-stretch h-[325px] relative max-w-full overflow-hidden shrink-0 object-cover"
        loading="eager"
        alt=""
        :src="imgContainer"
      />
      <div
        class="self-stretch flex flex-col items-start justify-start gap-[8px_0px]"
      >
        <h3
          class="m-0 self-stretch relative text-inherit leading-[28px] font-medium font-inherit mq450:text-base mq450:leading-[22px]"
        >
          {{waysToDecorYourHomeLikeAP}}
        </h3>
        <div
          class="self-stretch relative text-xs leading-[20px] font-caption-1 text-neutral-04-100"
        >
          By TRSE
        </div>
      </div>
      
    </div>
  </template>
  <script>
    import { defineComponent } from "vue";
  
    export default defineComponent({
      name: "Article",
      props: {
        imgContainer: { type: String },
        waysToDecorYourHomeLikeAP: { type: String },
      },
    });
  </script>