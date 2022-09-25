<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Page from '@/Layouts/Page.vue';

const gridSquareSize = 25;

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

const units = [
    {coords:{x:0, y:0}},
    {coords:{x:1, y:1}},
    {coords:{x:2, y:2}}
];


</script>

<template>
    <Head title="Dashboard" />
    <Page>
        <div class="game-board-wrapper relative">
            <div class="game-board-background z-0">
                <div
                    v-for="(row, rowIndex) in grid"
                    :key="rowIndex"
                    class="game-board-row"
                    :style="{
                            height:gridSquareSize+'px'
                        }"
                >
                    <div
                        v-for="(gridSquare, gridSquareIndex) in row"
                        :key="gridSquareIndex"
                        class="game-board-square"
                        :style="{
                            height:gridSquareSize+'px',
                            width:gridSquareSize+'px'
                        }"
                    ></div>
                </div>
            </div>
            <div class="game-board-unit-layer pointer-events-none bg-transparent border-gray-400 h-full w-full top-0 left-0 z-10 absolute">
                <div
                    class="unit absolute bg-purple-800 hover:bg-purple-500 pointer-events-auto"
                    v-for="(unit, unitIndex) in units"
                    :key="unitIndex"
                    :style="{
                        top:(unit.coords.y * gridSquareSize)+'px',
                        left:(unit.coords.x * gridSquareSize)+'px',
                        height:gridSquareSize+'px',
                        width:gridSquareSize+'px'
                    }"
                />
            </div>
        </div>
    </Page>
</template>
