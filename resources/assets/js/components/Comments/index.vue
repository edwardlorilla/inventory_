<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="comments">
            <demo-grid
                    :data="comments"
                    :columns="commentsColumns"
                    :filter-key="searchQuery">
            </demo-grid>
        </div>
        <div v-else>
            Loading...
        </div>
    </div>
</template>
<style>
</style>
<script>
    import DemoGrid from './../Filtering/Filter.vue';
    export default{
        components:{
            DemoGrid
        },
        data(){
            return{
                searchQuery: '',
                commentsColumns: ['name',],
                comments: []
              }
            },
            created(){
                this.fetchcomments();
            },
            methods:{
                fetchcomments(){
                    axios.get('api/comments').then(response => this.comments = response.data.comments)
                }
            }
        }
</script>
