<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    export default {
        mounted() {
            axios.get('/categories').then(function (response) {
                console.log(response.data);
            }).catch(function (error) {
                
            });
        
        }
    }
</script>
