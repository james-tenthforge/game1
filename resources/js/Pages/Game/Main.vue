<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Page from '@/Layouts/Page.vue';

const yLength = 25;
const xLength = 25;
const grid = [];
for(let rowIndex = 0; rowIndex < yLength; rowIndex++) {
    const row = [];
    for(let columnIndex = 0; columnIndex < xLength; columnIndex++) {
        const gridSquare = {};
        row.push(gridSquare);
    }
    grid.push(row);
}

</script>

<template>
    <Head title="Dashboard" />
    <Page>
        <div class="game-board-wrapper">
            <div class="game-board-background">
                <div
                    v-for="(row, rowIndex) in grid"
                    :key="rowIndex"
                    class="game-board-row"
                >
                    <div
                        v-for="(gridSquare, gridSquareIndex) in row"
                        :key="gridSquareIndex"
                        class="game-board-square"
                    ></div>
                </div>
            </div>
        </div>
    </Page>
</template>
