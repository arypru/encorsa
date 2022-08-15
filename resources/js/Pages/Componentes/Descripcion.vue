<template>
    <div class="row">
        <div class="flex-1">
            <p class="text-justify text-2xl Roboto leading-8 ">
                {{ texto }}
            </p>
        </div>
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
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

.Roboto {
    font-family: 'Roboto', serif;
    color: black;
}
</style>
