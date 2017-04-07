<template>
    <div>
        <form id="search">
            <input type="text" class="form-control" placeholder="search..." name="query" v-model="searchQuery" aria-describedby="basic-addon1">
        </form>
        <div v-if="Locations">
            <demo-grid
                    :data="Locations"
                    :columns="LocationsColumns"
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
                LocationsColumns: ['name',],
                Locations: []
              }
            },
            created(){
                this.fetchLocations();
            },
            methods:{
                fetchLocations(){
                    axios.get('api/locations').then(response => this.Locations = response.data.locations)
                }
            }
        }
</script>
