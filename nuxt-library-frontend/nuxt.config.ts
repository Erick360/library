// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: ["@nuxt/image", "shadcn-nuxt", "@nuxtjs/tailwindcss"],
  shadcn: {
    prefix: "",

    componentDir: "./components/ui",
  },
});