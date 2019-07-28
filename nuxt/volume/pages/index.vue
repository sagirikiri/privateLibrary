<template>
  <v-layout
    column
    justify-center
  >
      <v-container fluid grid-list-sm>
        <h1>
          ホットな本たち
        </h1>
        <v-layout wrap>
          <BookListItem
            v-for="item in items"
            :item=item
            :key="item.id"
          >
          </BookListItem>
        </v-layout>
      </v-container>
  </v-layout>
</template>

<script>

import BookListItem from "../components/BookListItem";
export default {
    components: {BookListItem},
    async asyncData({ app }) {
      const url = 'http://' + window.location.hostname + ':8080/api/v1/bookList';
      const response = await app.$axios.$get(url);
      return {
          items: response.data
      }
    }
}
</script>

<style scoped>
</style>
