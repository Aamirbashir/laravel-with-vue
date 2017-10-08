<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Data</div>

                    <div class="panel-body">
                     <table class="table table-striped">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Gender</th>
<th>Photo</th>
</table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
