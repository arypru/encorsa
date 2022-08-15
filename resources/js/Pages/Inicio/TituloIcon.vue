<template>
    <div class="flex flex-col py-8 lg:justify-around lg:flex-row lg:py-14">
            <a class="text-5xl transform motion-safe:hover:scale-110">
                <div class="flex pr-2">
                    <img width="48px"
                         height="48px"
                         :src="image">

                    <div class="Domine pl-5 hover:text-green-800 font-bold">
                        {{ titulo }}
                    </div>
                </div>
            </a>
    </div>
</template>

<script>
export default {
    name: "Titulocolor",
    props: {
        titulo: String,
        image: String
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
