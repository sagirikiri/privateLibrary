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
    computed: {
        items: function() {
            return this.$store.state.shopList;
        }
    },
    created() {
        this.$store.dispatch('getShopList')
    }
}
</script>

<style scoped>
</style>
