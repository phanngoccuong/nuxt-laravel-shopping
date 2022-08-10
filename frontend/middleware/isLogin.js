export default function ({ store, redirect }) {
  if (!store.getters.isLogin && process.client) {
    return redirect({ name: 'login' })
  }
}
