<template>
    <jet-form-section class="items-center p-6" @submitted="updatePassword">
        <template #title>
            Employee Information
        </template>

        <template #description>
            Enter employee name,email & birthday
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="fullname" value="Full Name" />
                <jet-input id="fullname" type="text" class="mt-1 block w-full" v-model="form.fullname" ref="fullname" autocomplete="fullname" />
                <jet-input-error :message="form.errors.fullname" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="password" value="Email" />
                <jet-input id="password" type="email" class="mt-1 block w-full" v-model="form.email" ref="email" autocomplete="email" />
                <jet-input-error :message="form.errors.email" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="age" value="Age For 2021 January" />
                <jet-input id="age" type="number" class="mt-1 block w-full" v-model="form.age" ref="age" autocomplete="age" />
                <jet-input-error :message="form.errors.age" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>
            <jet-danger-button class="mr-2">
                Cancel
            </jet-danger-button>
            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import JetActionMessage from '@/Jetstream/ActionMessage'
import JetButton from '@/Jetstream/Button'
import JetFormSection from '@/Jetstream/FormSection'
import JetInput from '@/Jetstream/Input'
import JetInputError from '@/Jetstream/InputError'
import JetLabel from '@/Jetstream/Label'
import JetDangerButton from "@/Jetstream/DangerButton";

export default {
    components: {
        JetDangerButton,
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
    },

    data() {
        return {
            form: this.$inertia.form({
                current_password: '',
                password: '',
                password_confirmation: '',
            }),
        }
    },

    methods: {

    },
}
</script>
