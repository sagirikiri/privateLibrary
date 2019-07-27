<template>
  <v-layout
    column
    justify-center
  >
    <v-flex
      xs12
      sm8
      md6
    >
      ホットな本たち
      <v-card
        class="mx-auto"
        :flat="flat"
        :loading="loading"
        :outlined="outlined"
        :elevation="elevation"
        :raised="raised"
        :width="width"
        :height="height"
      >
        <v-img
          class="white--text"
          height="200px"
          src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
        </v-img>
        <v-card-title>I'm a title</v-card-title>
        <v-card-text>I'm card text</v-card-text>
      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>

export default {
  data: () => ({
      flat: false,
      media: true,
      loading: false,
      actions: true,
      outlined: false,
      elevation: undefined,
      raised: false,
      width: 344,
      height: undefined,
      items: [],
  }),
  async asyncData({ app }) {
      const url = 'http://localhost:8080/api/v1/booklist';
      const response = await app.$axios.$get(url);
      console.log(response);
      return {
          items: response
      }
  }
}
</script>

<style scoped>
</style>
