<template>
  <v-layout
    column
    justify-center
  >
    <v-container fluid grid-list-sm>
      <h1>
        検索結果（{{keyword}}）
      </h1>
      <v-layout wrap>
        <BookListItem
          v-for="item in items"
          :id="item.id"
          :name="item.name"
          :author="item.author"
          :cover_photo="item.cover_photo"
          :key="item.id"
        >
        </BookListItem>
      </v-layout>
    </v-container>
  </v-layout>
</template>

<script>
    import BookListItem from "../../components/BookListItem";
    export default {
        data: function () {
            return {
                keyword: this.$route.query.keyword
            }
        },
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
