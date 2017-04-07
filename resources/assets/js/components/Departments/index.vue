<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="departments">
            <demo-grid
                    :data="departments"
                    :columns="departmentsColumns"
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
                departmentsColumns: ['name',],
                departments: []
              }
            },
            created(){
                this.fetchdepartments();
            },
            methods:{
                fetchdepartments(){
                    axios.get('api/departments').then(response => this.departments = response.data.departments)
                }
            }
        }
</script>
