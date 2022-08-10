<template>
  <div>
    <div class="space-y-4">
      <div
        class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap"
      >
        <!-- cart image -->
        <div class="w-32 flex-shrink-0">
          <img :src="`${imageURL}images/${item.image_url}`" class="w-96 h-36" />
        </div>
        <!-- cart image end -->
        <!-- cart content -->
        <div class="md:w-1/3 w-full">
          <h2
            class="text-gray-800 mb-3 xl:text-xl textl-lg font-medium uppercase"
          >
            {{ item.name }}
          </h2>
          <p class="text-primary font-semibold">
            {{
              new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
              }).format(item.price)
            }}
          </p>
          <p class="text-gray-500">Size: M</p>
        </div>
        <!-- cart content end -->
        <!-- cart quantity -->
        <div
          class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300"
        >
          <div
            class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none"
          >
            <a @click.prevent="decrementQuantity(item.id)">-</a>
          </div>
          <div class="h-8 w-10 flex items-center justify-center">
            {{ item.quantity }}
          </div>
          <div
            class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none"
          >
            <a @click.prevent="incrementQuantity(item.id)">+</a>
          </div>
        </div>
        <!-- cart quantity end -->
        <div class="ml-auto md:ml-0">
          <p class="text-primary text-lg font-semibold">
            {{
              new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
              }).format(item.price * item.quantity)
            }}
          </p>
        </div>
        <a
          class="text-gray-600 hover:text-primary cursor-pointer"
          @click.prevent="deleteItem(index)"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      imageURL: this.$axios.defaults.baseURL.slice(0, 22),
    }
  },
  props: ['index', 'item'],
  watch: {
    item() {},
  },
  methods: {
    deleteItem(index) {
      this.$store.dispatch('deleteItem', index)
      this.$toast.success('Successfully delete item')
    },
    incrementQuantity(productID) {
      this.$store.dispatch('incrementQuantity', productID)
    },
    decrementQuantity(productID) {
      this.$store.dispatch('decrementQuantity', productID)
    },
  },
}
</script>
