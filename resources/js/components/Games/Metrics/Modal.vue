<template>
    <Transition>
        <div>
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl sm:my-8 sm:w-full sm:max-w-xl sm:p-6">
                        <Bar
                            id="sales-chart"
                            :data="chartData"
                        />
                        <div class="mt-5 sm:mt-6">
                            <button
                                @click="close"
                                type="button"
                                class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                                hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            >
                                Close metrics
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Transition>
</template>

<script>
import { Bar } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'
ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
    name: "Modal",
    components: {
        Bar
    },
    emits: ['close'],
    props: {
        data: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            chartData: {
                labels: [
                    'Global sales',
                    'Europe sales',
                    'North America sales',
                    'Japan sales'
                ],
                datasets: [
                    {
                        label: "Number of units sold",
                        data: [
                            this.data.global_sales,
                            this.data.eu_sales,
                            this.data.na_sales,
                            this.data.jp_sales,
                        ]
                    }
                ]
            }
        }
    },
    methods: {
        close() {
            this.$emit('close');
        }
    }
}
</script>

<style scoped>
    .v-enter-active,
    .v-leave-active {
        transition: opacity 0.5s ease;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }
</style>
