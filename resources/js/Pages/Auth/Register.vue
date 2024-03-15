<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    f_name: '',
    m_initial: '',
    l_name: '',
    dob: '',
    weight: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="f_name" value="First Name" />

                <TextInput
                    id="f_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.f_name"
                    required
                    autofocus
                    autocomplete="f_name"
                />

                <InputError class="mt-2" :message="form.errors.f_name" />
            </div>

            <div>
                <InputLabel for="m_initial" value="Middle Initial" />

                <TextInput
                    id="m_initial"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.m_initial"
                    autofocus
                    autocomplete="m_initial"
                />

                <InputError class="mt-2" :message="form.errors.m_initial" />
            </div>

            <div>
                <InputLabel for="l_name" value="Last Name" />

                <TextInput
                    id="l_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.l_name"
                    required
                    autofocus
                    autocomplete="l_name"
                />

                <InputError class="mt-2" :message="form.errors.l_name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="mt-4">
                <InputLabel for="dob" value="Date-of-birth" />

                <TextInput
                    id="dob"
                    type="date"
                    class="mt-1 block w-full"
                    v-model="form.dob"
                    required
                    autocomplete="0000-00-00"
                />

                <InputError class="mt-2" :message="form.errors.dob" />
            </div>

            <div class="mt-4">
                <InputLabel for="weight" value="Weight" />

                <TextInput
                    id="weight"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="form.weight"
                    required
                    autocomplete="00.00"
                />

                <InputError class="mt-2" :message="form.errors.weight" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
