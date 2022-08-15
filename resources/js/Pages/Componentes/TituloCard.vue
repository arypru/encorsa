<template>
    <div class="flex">
        <p class="text-justify text-3xl font-bold Domine">
            {{ texto }}
        </p>
    </div>
</template>

<script>
export default {
    name: "Titulo",
    props: {
        texto: String
    }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Domine&display=swap');

.Domine {
    font-family: 'Domine', serif;
    color: black;
}
</style>
