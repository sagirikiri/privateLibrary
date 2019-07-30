export const state = () => ({
  counter: 0,
  shopList: [],
});

export const mutations = {
  increment (state) {
    state.counter++
  },
  setShopList (state, shopList) {
    state.shopList  = shopList;
  }
};

export const actions = {
  getShopList () {
    let shopList = [
      {
        'id': 1,
        'name': 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
        'description': 'すがが好きなやつ。『かぐや様は告らせたい〜天才たちの恋愛頭脳戦〜』は、赤坂アカによる日本の漫画作品。通称『かぐや様』。『ミラクルジャンプ』にて2015年6月号から2016年2月号まで連載された。その後、掲載誌を『週刊ヤングジャンプ』に移し、同年17号より連載中。シリーズ累計発行部数は2019年5月の時点で700万部を達成。',
        'author': '赤坂アカ',
        'publication': '2016/03/18',
        'borrowing_state': 'true',
        'cover_photo': 'https://unsplash.it/150/300?image=1',//.rand(1, 80),
        'return_day': '2016/03/18',
      },
      {
        'id': 2,
        'name': 'Javaの本屋で～',
        'description': 'すがが好きなやつ。シリーズ累計発行部数は2019年5月の時点で700万部を達成。',
        'author': '赤坂アカ',
        'publication': '2016/03/18',
        'borrowing_state': 'true',
        'cover_photo': 'https://unsplash.it/150/300?image=2',//.rand(1, 80),
        'return_day': '2016/03/18',
      },
    ];
    this.commit('setShopList', shopList);
    // const url = 'http://' + window.location.hostname + ':8080/api/v1/bookList';
    // const response = await app.$axios.$get(url);
    // return {
    //   items: response.data
    // }
  },
  searchShopList ({}, keyword) {
    let shopList = [{
      'id': 1,
      'name': 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
      'description': 'すがが好きなやつ。『かぐや様は告らせたい〜天才たちの恋愛頭脳戦〜』は、赤坂アカによる日本の漫画作品。通称『かぐや様』。『ミラクルジャンプ』にて2015年6月号から2016年2月号まで連載された。その後、掲載誌を『週刊ヤングジャンプ』に移し、同年17号より連載中。シリーズ累計発行部数は2019年5月の時点で700万部を達成。',
      'author': '赤坂アカ',
      'publication': '2016/03/18',
      'borrowing_state': 'true',
      'cover_photo': 'https://unsplash.it/150/300?image=1',//.rand(1, 80),
      'return_day': '2016/03/18',
    }];
    this.commit('setShopList', shopList);
  }
};
