<template>
  <v-flex
    xs6 sm4 md3
  >
    <v-card
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
        :src=cover_photo
      >
      </v-img>
      <v-card-title>{{name}}</v-card-title>
      <v-card-text>{{author}}</v-card-text>
    </v-card>
  </v-flex>
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
        name: "BookListItem",
        props: ['name', 'author', 'cover_photo'],
    }
</script>

<style scoped>

</style>
