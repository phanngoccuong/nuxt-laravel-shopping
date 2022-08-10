<template>
  <div>
    <Navbar />
    <Nuxt />
    <Footer />
  </div>
</template>

<script>
import Navbar from '../components/User/Navbar.vue'
import Footer from '../components/User/Footer.vue'
export default {
  components: {
    Navbar,
    Footer,
  },
}
</script>
