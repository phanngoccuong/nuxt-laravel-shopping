<template>
  <div>
    <header class="py-4 shadow-sm bg-pink-100 lg:bg-white">
      <div class="container flex items-center justify-between">
        <!-- logo -->
        <a href="#" class="block w-32">
          <img
            src="~/assets/img/logo.png"
            class="mr-3 h-6 sm:h-9"
            alt="Flowbite Logo"
          />
        </a>
        <!-- logo end -->

        <!-- searchbar -->
        <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
          <span class="absolute left-4 top-3 text-lg text-gray-400">
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
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              ></path>
            </svg>
          </span>
          <input
            type="text"
            class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary focus:border-primary"
            placeholder="search"
          />
          <button
            type="submit"
            class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition"
          >
            Search
          </button>
        </div>
        <!-- searchbar end -->

        <!-- navicons -->
        <div class="space-x-4 flex items-center">
          <a
            href="wishlist.html"
            class="block text-center text-gray-700 hover:text-primary transition relative"
          >
            <!-- <span
              class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"
              >5</span
            > -->
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
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
              ></path>
            </svg>
            <div class="text-xs leading-3">Wish List</div>
          </a>
          <nuxt-link :to="{ name: 'user-cart' }">
            <a
              href="#"
              class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative"
            >
              <!-- <span
              class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"
              >3</span
            > -->
              <div class="text-2xl">
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
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                  ></path>
                </svg>
              </div>

              <div class="text-xs leading-3">Cart</div>
              <span
                v-if="cartQuantity > 0"
                class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"
                >{{ cartQuantity }}</span
              >
            </a>
          </nuxt-link>
          <a
            href="#"
            class="lg:block text-center text-gray-700 hover:text-primary transition hidden relative"
            @click.prevent="logout"
          >
            <div class="text-2xl">
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
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                ></path>
              </svg>
            </div>
            <div class="text-xs leading-3">Logout</div>
          </a>
        </div>
        <!-- navicons end -->
      </div>
    </header>
    <nav class="bg-gray-800 hidden lg:block">
      <div class="container">
        <div class="flex">
          <!-- all category -->
          <div
            class="px-8 py-4 bg-primary flex items-center cursor-pointer group relative"
          >
            <span class="text-white">
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
                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                ></path>
              </svg>
            </span>
            <span class="capitalize ml-2 text-white">All categories</span>

            <div
              class="absolute left-0 top-full w-full bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed"
            >
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
              </a>
              <!-- single category end -->
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Sofa</span>
              </a>
              <!-- single category end -->
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Office</span>
              </a>
              <!-- single category end -->
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
              </a>
              <!-- single category end -->
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Mattress</span>
              </a>
              <!-- single category end -->
              <!-- single category -->
              <a
                href="#"
                class="px-6 py-3 flex items-center hover:bg-gray-100 transition"
              >
                <span class="ml-6 text-gray-600 text-sm">Sofa</span>
              </a>
              <!-- single category end -->
            </div>
          </div>
          <!-- all category end -->

          <!-- nav menu -->
          <div class="flex items-center justify-between flex-grow pl-12">
            <div class="flex items-center space-x-6 text-base capitalize">
              <a href="#" class="text-gray-200 hover:text-white transition"
                >Home</a
              >
              <a href="#" class="text-gray-200 hover:text-white transition"
                >Shop</a
              >
              <a href="#" class="text-gray-200 hover:text-white transition"
                >About us</a
              >
              <a href="#" class="text-gray-200 hover:text-white transition"
                >Contact us</a
              >
            </div>
            <!-- <a
              href="login.html"
              class="ml-auto justify-self-end text-gray-200 hover:text-white transition"
            >
              Login/Register
            </a> -->
          </div>
          <!-- nav menu end -->
        </div>
      </div>
    </nav>

    <!-- mobile menubar -->
    <div
      class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40"
    >
      <a
        href="javascript:void(0)"
        class="block text-center text-gray-700 hover:text-primary transition relative"
      >
        <div id="menuBar" class="text-2xl">
          <i class="fas fa-bars"></i>
        </div>
        <div class="text-xs leading-3">Menu</div>
      </a>
      <a
        href="#"
        class="block text-center text-gray-700 hover:text-primary transition relative"
      >
        <div class="text-2xl">
          <i class="fas fa-list-ul"></i>
        </div>
        <div class="text-xs leading-3">Category</div>
      </a>
      <a
        href="#"
        class="block text-center text-gray-700 hover:text-primary transition relative"
      >
        <div class="text-2xl">
          <i class="fas fa-search"></i>
        </div>
        <div class="text-xs leading-3">Search</div>
      </a>
      <a
        href="#"
        class="text-center text-gray-700 hover:text-primary transition relative"
      >
        <span
          class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"
          >3</span
        >
        <div class="text-2xl">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="text-xs leading-3">Cart</div>
      </a>
    </div>
    <!-- mobile menu end -->
    <!-- mobile sidebar menu -->
    <div
      id="mobileMenu"
      class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden"
    >
      <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
        <div
          id="closeMenu"
          class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer"
        >
          <i class="fas fa-times"></i>
        </div>
        <!-- navlink -->
        <h3
          class="text-xl font-semibold text-gray-700 mb-1 font-roboto pl-4 pt-4"
        >
          Menu
        </h3>
        <div class="">
          <a
            href="#"
            class="block px-4 py-2 font-medium transition hover:bg-gray-100"
          >
            Home
          </a>
          <a
            href="#"
            class="block px-4 py-2 font-medium transition hover:bg-gray-100"
          >
            Shop
          </a>
          <a
            href="#"
            class="block px-4 py-2 font-medium transition hover:bg-gray-100"
          >
            About Us
          </a>
          <a
            href="#"
            class="block px-4 py-2 font-medium transition hover:bg-gray-100"
          >
            Contact Us
          </a>
        </div>
        <!-- navlinks end -->
      </div>
    </div>
    <!-- mobile sidebar menu end -->
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  name: 'UserNavbar',
  computed: {
    ...mapGetters(['cartQuantity', 'isLogin']),
  },
  methods: {
    logout() {
      this.$store.dispatch('logout')
      this.$router.push({ name: 'login' })
    },
  },
}
</script>
