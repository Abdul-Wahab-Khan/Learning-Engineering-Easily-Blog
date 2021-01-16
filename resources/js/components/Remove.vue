<template>
    <div>
        <span class="fa fa-trash" @click="call" ></span>
    </div>
</template>

<script>
    export default {
        props: {
            id: {
                type: String,
                required: true
            }
        },
        methods: {
            call() {
                document.getElementById("div"+this.id).remove();
            }
        }
    }
</script>
