<template>
    <div class="mb-6 px-4 sm:px-6 lg:px-8">
        <modal v-if="isModalVisible" @close="isModalVisible = false" :data="modalData"></modal>

        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Games</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the games including their name, genre, or various sales metrics.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a :href="route('games.create')" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add game</a>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="rounded-md my-4 px-3 pb-1.5 pt-2.5 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-600">
                <label for="name" class="block text-xs font-medium text-gray-900">Search</label>
                <input v-model="search" type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Grand Theft Auto V? Or maybe Rockstar?" />
            </div>
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'name' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('name')">
                                        Name
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'rank' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('rank')">
                                        Rank
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'platform' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('platform')">
                                        Platform
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'genre' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('genre')">
                                        Genre
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'publisher' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('publisher')">
                                        Publisher
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <div :class="`group inline-flex cursor-pointer ${ sortBy === 'global_sales' ? 'active-filter' : 'inactive'}`" @click="setColumnSort('global_sales')">
                                        Global sales
                                        <span>
                                            <svg :class="`h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible ${sortByDirection === 'desc' ? 'desc-order' : 'asc-order'}`" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-0">
                                    <span class="sr-only">View sales metrics</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr v-for="(game, index) in sortedGames" :key="index">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ game.name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ game.rank }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ game.platform }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ game.genre }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ game.publisher }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ game.global_sales }}</td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-0">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900" @click="openModal(game)">View sales metrics</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Modal from "../Games/Metrics/Modal.vue";
export default {
    name: "GamesList",
    components: {
        Modal
    },
    props: {
        games: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            isModalVisible: false,
            modalData: null,
            isLoading: true,
            sortBy: 'rank',
            sortByDirection: 'asc',
            search: ''
        }
    },
    methods: {
        setColumnSort(column) {
            this.sortByDirection = this.sortByDirection === 'asc' ? 'desc' : 'asc';
            this.sortBy = column;
        },
        openModal(data) {
            this.modalData = data;
            this.isModalVisible = true;
        },
    },
    computed: {
        sortedGames() {
            const search = this.search && this.search.toLowerCase();

            let data = this.games.sort((a,b) => {
                let modifier = 1;
                if(this.sortByDirection === 'desc') modifier = -1;
                if(a[this.sortBy] < b[this.sortBy]) return -1 * modifier;
                if(a[this.sortBy] > b[this.sortBy]) return 1 * modifier;
                return 0;
            });

            if (search) {
                data = data.filter((row) => {
                    return Object.keys(row).some((key) => {
                        return String(row[key]).toLowerCase().indexOf(search) > -1
                    })
                })
            }

            return data;
        }
    },
}
</script>

<style scoped lang="scss">
    .inactive > span {
        @apply ml-2 flex-none rounded invisible text-gray-400 group-hover:visible group-focus:visible;
    }
    .active-filter > span {
        @apply ml-2 flex-none rounded bg-gray-200 text-gray-900 group-hover:bg-gray-300;
        & .asc-order {
            transform: rotate(0deg);
        }

        & .desc-order {
            transform: rotate(180deg);
        }
    }
</style>
