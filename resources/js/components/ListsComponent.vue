<template>
    <div>Lists</div>
</template>
<script>

export default {
    name: "Lists",
    mounted() {
        this.$axios.get('/api/user').then((user) => {
            console.log(user)
        });
        this.$axios.get('/api/lists').then((data) => {
            console.log(data)
        })
    }
}
</script>
