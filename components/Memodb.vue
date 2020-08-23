<template lang="pug">
table
  tr
    //- 最初のオブジェクトからタイトルを取得
    th(v-for="(value, key) in objs[0]") {{ key }}
  //- オブジェクトを一つずつ取り出す
  tr(v-for="obj in objs")
    //- 取り出したオブジェクトのvalueをすべて取り出す。
    td(v-for="value in obj") {{ value }}
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      objs: [],
    };
  },
  mounted() {
    axios.get("/server/hello").then((response) => (this.objs = response.data));
  },
};
</script>

<style lang="stylus" scoped>
table
  width 80%
  margin 10% auto
  border-collapse collapse
  text-align center
  tr
    th, td
      border solid 1px
      width 50%
    th
      background rgba(#0af, 0.6)
    &:nth-child(odd) td
      background rgba(#0af, 0.2)
</style>