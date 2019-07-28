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
          :item=item
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
        computed: {
            keyword: that => that.$route.query.keyword,
            items: vm => vm.$store.state.shopList
        },
        components: {BookListItem},
        created() {
            this.$store.dispatch('searchShopList', this.keyword)
        }
    }
</script>

<style scoped>

</style>
