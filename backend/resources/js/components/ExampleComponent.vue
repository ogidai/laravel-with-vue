<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <first-component></first-component>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            var url = '/ajax/items';
            axios.get(url).then(function(response){
            var items = response.data;
            console.log(items);
        });
        }
    }
</script>
