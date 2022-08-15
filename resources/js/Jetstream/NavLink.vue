<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'uppercase inline-flex items-center px-1 pt-1 darken-1 leading-5 text-yellow-600 focus:outline-none transition duration-150 ease-in-out'
                            : 'uppercase inline-flex items-center px-1 pt-1 text-base leading-5 text-black hover:text-yellow-600  focus:outline-none focus:text-yellow-600 transition duration-150 ease-in-out'
            }
        }
    }
</script>
