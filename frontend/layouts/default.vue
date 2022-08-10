<template>
  <div>
    <Navbar />
    <div class="grid grid-cols-5 min-h-screen">
      <div><Sidebar /></div>
      <div class="col-span-4"><Nuxt /></div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Navbar from '../components/Navbar.vue'
import Sidebar from '../components/Sidebar.vue'

export default {
  components: {
    Navbar,
    Sidebar,
  },
  computed: {
    ...mapGetters(['hasToken', 'getRole']),
  },
  created() {
    this.checkLogin()
    this.checkRole()
  },
  methods: {
    checkLogin() {
      if (this.hasToken === null) {
        this.$router.push({ name: 'login' })
      }
    },
    checkRole() {
      if (this.getRole !== 'admin') {
        this.$router.push({ name: 'login' })
      }
    },
    // async getUser() {
    //   await this.$axios
    //     .$get(`user`)
    //     .then((res) => {
    //       this.user = res
    //     })
    //     .catch((e) => {
    //       if (e.response.status === 403) {
    //         this.$toast.error(e.response.data.msg)
    //         this.$router.push({ name: 'login' })
    //       }
    //     })
    // },
  },
}
</script>
