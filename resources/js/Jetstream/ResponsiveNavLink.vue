<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>

        <inertia-link :href="href" :class="classes" v-else>
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
    export default {
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                            ? 'block pl-3 pr-4 py-2 border-l-4 border-yellow-500 text-base font-bold text-yellow-800 bg-yellow-100 focus:outline-none focus:text-yellow-800 focus:bg-yelloe-100 focus:border-yellow-700 transition duration-150 ease-in-out'
                            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-semibold text-gray-700 hover:text-yellow-800 hover:bg-yellow-50 hover:border-yellow-300 focus:outline-none focus:text-yellow-800 focus:bg-yellow-100 focus:border-yellow-500 transition duration-150 ease-in-out'
            }
        }
    }
</script>
