<script setup>
import BreezeButton from '@/Components/Auth/Button.vue';
import BreezeCheckbox from '@/Components/Auth/Checkbox.vue';
import BreezeInput from '@/Components/Auth/Input.vue';
import BreezeLabel from '@/Components/Auth/Label.vue';
import BreezeValidationErrors from '@/Components/Auth/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Page from '@/Layouts/Page.vue';

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
<div>
<Head title="Log in" />
<Page>
    <BreezeValidationErrors class="mb-4" />

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="email" value="Email" />
            <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <BreezeLabel for="password" value="Password" />
            <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label class="flex items-center">
                <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                <span class="ml-2 text-sm text-gray-200">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Log in
            </BreezeButton>
        </div>
    </form>
</Page>
</div>
</template>
