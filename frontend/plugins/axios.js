export default function ({ store, app }) {
  const token = store.getters.hasToken
  app.$axios.setToken(token, 'Bearer')
}
