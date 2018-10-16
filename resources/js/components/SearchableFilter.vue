<template>
    <VueSelect
            :label="filter.label"
            :options="filter.options"
            :value="valueObject"
            @input="change"
    />
</template>

<script>
    import VueSelect from 'vue-select';

    export default {
        components: {
            VueSelect,
        },

        props: {
            filter: {
                type: Object,
                required: true,
            },
            value: String,
        },

        computed: {
            valueObject() {
                return this.filter.options.find(option => option.value == this.value)
            }
        },

        methods: {
            change(value) {
                const payload = value ? value.value : '';

                this.$emit('input', payload);
            }
        },
    }
</script>
