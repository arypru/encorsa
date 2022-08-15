<template>
    <div>
        <div class="inline-flex space-x-6 pb-5 pt-8">
            <div class="flex">
                <p class="text-justify text-5xl font-bold Domine">
                    {{ texto }}
                </p>
            </div>

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
@import url('https://fonts.googleapis.com/css2?family=Domine&display=swap');

.Domine {
    font-family: 'Domine', serif;
    color: black;
}
</style>
