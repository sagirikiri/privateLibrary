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
      :hover="hover"
      v-on:click="getBook(item.id)"
    >
      <v-img
        class="white--text"
        height="200px"
        :src="item.cover_photo"
      >
      </v-img>
      <v-card-title>{{item.name}}</v-card-title>
      <v-card-text>{{item.author}}</v-card-text>
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
            hover: true,
        }),
        name: "BookListItem",
        props: {'item':Object},
        methods: {
            getBook: function(id) {
                this.$router.push('/books/' + id);
            }
        }
    }
</script>

<style scoped>

</style>
