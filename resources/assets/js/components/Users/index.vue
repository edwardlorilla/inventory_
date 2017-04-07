<template>
    <div>
        <div class="padding-bottom">
            <form id="search">
                <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
            </form>
        </div>

        <div v-if="users">
            <demo-grid
                    :data="users"
                    :columns="usersColumns"
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
                usersColumns: ['name', 'email'],
                users: []
              }
            },
            created(){
                this.fetchUsers();
            },
            methods:{
                fetchUsers(){
                console.log(1)
                    axios.get('api/users').then(response => this.users = response.data.users)
                }
            }
        }
</script>
