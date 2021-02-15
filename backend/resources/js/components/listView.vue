<template>
<div>
    <div v-for="(item, index) in items" :key="index"> <!-- 受け取ったitemsをfor文で回す -->
        <list-item
            :item="item"
            class="item"
            v-on:itemchanged="$emit('reloadlist')" />
    </div>
</div>
</template>
<script>
import listItem from './listItem'
import ListItem from './listItem.vue'
export default {
    props: ['items'], //app.vueからitemsを受け取る
    components: {
        listItem,
        ListItem
    }

}
</script>
<style scoped>
    .item {
        background: #e6e6e6;
        padding: 5px;
        margin-top: 5px;
    }
</style>