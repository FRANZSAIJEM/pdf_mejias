<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})

// console.log(props.message)
</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin</h2>
        </template>

            <div v-if="props.message.info" class="py-5 rounded-lg text-green-600 text-center text-3xl">
                {{ props.message.info }}
            </div>
            <div v-if="props.message.error" class="py-5 rounded-lg text-red-600 text-center text-3xl">
                {{ props.message.error }}
            </div>

        <div class="py-12">
            <div class="flex justify-center items-center">
                <!-- <MailCard :subject="form.subject" :message="form.message"  /> -->
                <div class="p-4 rounded-lg w-1/4">
                    <h1 class="text-2xl mb-10">Send message to all clients</h1>
                    <form @submit.prevent="submit">
                        <div class="items-start space-x-2 mb-10">
                            <label for="subject"><b>Subject:</b> &nbsp;&nbsp;</label>
                            <input v-model="form.subject" type="text" id="subject" class="px-2 py-1 rounded-md">
                        </div>
                        <div class="items-start space-x-2 mb-4">
                            <label for="message"><b>Message:</b> </label>
                            <textarea v-model="form.message" type="text" id="message" class="px-2 py-1 h-[120px] w-full rounded-md"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-white px-4 py-1.5 rounded-md bg-green-600">Send mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
