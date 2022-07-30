<script setup>
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-700 dark:bg-gray-700 sm:items-center sm:pt-0">
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
            <template v-if="$page.props.auth.user">
                <Link :href="route('dashboard')" class="text-sm text-gray-200 underline">
                    Dashboard
                </Link>
                <Link :href="route('logout')" method="post" class="ml-4 text-sm text-gray-200 underline">
                    Log Out
                </Link>
            </template>
            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-200 underline">
                    Log in
                </Link>
                <Link :href="route('register')" class="ml-4 text-sm text-gray-200 underline">
                    Register
                </Link>
            </template>
        </div>
        <slot/>
    </div>
</template>
