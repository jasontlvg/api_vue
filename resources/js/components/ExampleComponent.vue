<template>
    <div class="card">
        <div class="card-header">Add Task</div>
        <div class="card-body">
            <input type="text" class="form-control">
            <button class="btn btn-primary mt-2" @click="sendTask()">Add</button>
<!--            <h3>{{calabaza}}</h3>-->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return{
                calabaza: true
            }
        },
        methods:{
            sendTask: function () {
                // console.log('Añadiendo');
                let x;
                axios.post('./api/task', {title:'something'}).then(function(response){
                    console.log(response.data.message);
                });
            }
        }
    }
</script>
