<template>
  <div>
    <!-- breadcum -->
    <div class="container py-4 flex justify-between">
      <div class="flex gap-3 items-center">
        <a href="#" class="text-primary text-base">
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
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            ></path>
          </svg>
        </a>
        <span class="text-sm text-gray-400">
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
              d="M9 5l7 7-7 7"
            ></path>
          </svg>
        </span>
        <p class="text-gray-600 font-medium">Shop</p>
      </div>
    </div>
    <div
      class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative"
    >
      <!-- sidebar -->
      <div
        class="col-span-1 bg-white px-4 pt-4 pb-6 shadow rounded overflow-hidden absolute lg:static left-4 top-16 z-10 w-72 lg:w-full lg:block"
      >
        <div class="divide-gray-200 divide-y space-y-5 relative">
          <!-- category filter -->
          <div class="relative">
            <div
              class="lg:hidden text-gray-400 hover:text-primary text-lg absolute right-0 top-0 cursor-pointer"
            >
              <i class="fas fa-times"></i>
            </div>
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">
              Categories
            </h3>
            <div class="space-y-2">
              <!-- single category -->
              <div class="flex items-center">
                <input
                  id="Bedroom"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer"
                  >Bedroom</label
                >
                <div class="ml-auto text-gray-600 text-sm">(15)</div>
              </div>
              <!-- single category end -->
              <!-- single category -->
              <div class="flex items-center">
                <input
                  id="Sofa"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer"
                  >Sofa</label
                >
                <div class="ml-auto text-gray-600 text-sm">(05)</div>
              </div>
              <!-- single category end -->
              <!-- single category -->
              <div class="flex items-center">
                <input
                  id="Office"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Office" class="text-gray-600 ml-3 cursor-pointer"
                  >Office</label
                >
                <div class="ml-auto text-gray-600 text-sm">(09)</div>
              </div>
              <!-- single category end -->
              <!-- single category -->
              <div class="flex items-center">
                <input
                  id="Outdoor"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer"
                  >Outdoor</label
                >
                <div class="ml-auto text-gray-600 text-sm">(19)</div>
              </div>
              <!-- single category end -->
            </div>
          </div>
          <!-- category filter end -->
          <!-- brand filter -->
          <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">
              Brands
            </h3>
            <div class="space-y-2">
              <!-- single brand name -->
              <div class="flex items-center">
                <input
                  id="Dominik"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Dominik" class="text-gray-600 ml-3 cursor-pointer"
                  >Dominik</label
                >
                <div class="ml-auto text-gray-600 text-sm">(15)</div>
              </div>
              <!-- single brand name end -->
              <!-- single brand name -->
              <div class="flex items-center">
                <input
                  id="Karl"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Karl" class="text-gray-600 ml-3 cursor-pointer"
                  >Karl</label
                >
                <div class="ml-auto text-gray-600 text-sm">(18)</div>
              </div>
              <!-- single brand name end -->
              <!-- single brand name -->
              <div class="flex items-center">
                <input
                  id="Maxing"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer"
                  >Maxing</label
                >
                <div class="ml-auto text-gray-600 text-sm">(09)</div>
              </div>
              <!-- single brand name end -->
              <!-- single brand name -->
              <div class="flex items-center">
                <input
                  id="Ernest"
                  type="checkbox"
                  class="text-primary focus:ring-0 rounded-sm cursor-pointer"
                />
                <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer"
                  >Ernest</label
                >
                <div class="ml-auto text-gray-600 text-sm">(12)</div>
              </div>
              <!-- single brand name end -->
            </div>
          </div>
          <!-- brand filter end -->
          <!-- price filter -->
          <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">
              Price
            </h3>
            <div class="mt-4 flex items-center">
              <input
                type="text"
                class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                placeholder="min"
              />
              <span class="mx-3 text-gray-500">-</span>
              <input
                type="text"
                class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                placeholder="mix"
              />
            </div>
          </div>
          <!-- price filter end -->
          <!-- size filter -->
          <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">
              size
            </h3>
            <div class="flex items-center gap-2">
              <!-- single size -->
              <div class="size-selector">
                <input id="size-xs" type="radio" name="size" class="hidden" />
                <label
                  for="size-xs"
                  class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600"
                >
                  XS
                </label>
              </div>
              <!-- single size end -->
              <!-- single size -->
              <div class="size-selector">
                <input id="size-s" type="radio" name="size" class="hidden" />
                <label
                  for="size-s"
                  class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600"
                >
                  S
                </label>
              </div>
              <!-- single size end -->
              <!-- single size -->
              <div class="size-selector">
                <input
                  id="size-m"
                  type="radio"
                  name="size"
                  class="hidden"
                  checked
                />
                <label
                  for="size-m"
                  class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600"
                >
                  M
                </label>
              </div>
              <!-- single size end -->
              <!-- single size -->
              <div class="size-selector">
                <input id="size-l" type="radio" name="size" class="hidden" />
                <label
                  for="size-l"
                  class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600"
                >
                  L
                </label>
              </div>
              <!-- single size end -->
              <!-- single size -->
              <div class="size-selector">
                <input id="size-xl" type="radio" name="size" class="hidden" />
                <label
                  for="size-xl"
                  class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600"
                >
                  XL
                </label>
              </div>
              <!-- single size end -->
            </div>
          </div>
          <!-- size filter end -->
          <!-- color filter -->
          <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">
              color
            </h3>
            <div class="flex items-center gap-2">
              <!-- single color -->
              <div class="color-selector">
                <input
                  id="color-red"
                  type="radio"
                  name="color"
                  class="hidden"
                  checked
                />
                <label
                  for="color-red"
                  style="background-color: #fc3d57"
                  class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm"
                >
                </label>
              </div>
              <!-- single color end -->
              <!-- single color -->
              <div class="color-selector">
                <input
                  id="color-white"
                  type="radio"
                  name="color"
                  class="hidden"
                />
                <label
                  for="color-white"
                  style="background-color: #fff"
                  class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm"
                >
                </label>
              </div>
              <!-- single color end -->
              <!-- single color -->
              <div class="color-selector">
                <input
                  id="color-black"
                  type="radio"
                  name="color"
                  class="hidden"
                />
                <label
                  for="color-black"
                  style="background-color: #000"
                  class="text-xs border border-gray-200 rounded-sm h-5 w-5 flex items-center justify-center cursor-pointer shadow-sm"
                >
                </label>
              </div>
              <!-- single color end -->
            </div>
          </div>
          <!-- color filter end -->
        </div>
      </div>
      <div class="col-span-3">
        <!-- sorting -->
        <div class="mb-4 flex items-center">
          <button
            class="bg-primary border border-primary text-white px-10 py-3 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition lg:hidden text-sm mr-3 focus:outline-none"
          >
            Filter
          </button>
          <select
            class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary"
          >
            <option>Default sorting</option>
            <option>Price low-high</option>
            <option>Price high-low</option>
            <option>Latest product</option>
          </select>
          <div class="flex gap-2 ml-auto">
            <div
              class="border border-primary w-10 h-9 flex items-center justify-center text-white bg-primary rounded cursor-pointer"
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
                  d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"
                ></path>
              </svg>
            </div>
            <div
              class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer"
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
                  d="M4 6h16M4 10h16M4 14h16M4 18h16"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
          <Product
            v-for="product in products"
            :key="product.id"
            :product="product"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Product from '../../components/User/Product.vue'
export default {
  components: { Product },
  layout: 'forUser',
  data() {
    return {
      products: [],
    }
  },
  head() {
    return {
      title: 'Dashboard for User',
    }
  },
  created() {
    this.getProduct()
  },
  methods: {
    async getProduct() {
      await this.$axios
        .$get(`/user/product/get`)
        .then((res) => {
          this.products = res
        })
        .catch((e) => {
          console.log(e.response)
        })
    },
  },
}
</script>
