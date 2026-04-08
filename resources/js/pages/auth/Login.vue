<script setup lang="ts">
import { Form, Head } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import PasswordInput from '@/components/PasswordInput.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Label } from '@/components/ui/label';
import { Spinner } from '@/components/ui/spinner';
import AuthBase from '@/layouts/AuthLayout.vue';
import { register } from '@/routes';
import { store } from '@/routes/login';
import { request } from '@/routes/password';
import { ArrowRightIcon } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();
</script>

<template>
    <AuthBase
        title="Log ind med MitID"
        description="Enter your email and password below to log in"
    >
        <Head title="Log ind" />

        <div
            v-if="status"
            class="mb-4 text-center text-sm font-medium text-green-600"
        >
            {{ status }}
        </div>

        <Form
            v-bind="store.form()"
            :reset-on-success="['password']"
            v-slot="{ errors, processing }"
            class="flex flex-col gap-6"
        >
            <div class="grid gap-6">
                <div class="grid gap-1">
                    <span class="text-sm font-black">BRUGER ID</span>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autofocus
                        :tabindex="1"
                        class="rounded-md border-2 border-gray-300 px-2 py-3 text-sm hover:border-blue-600 focus:border-blue-600 focus:bg-blue-600/5 focus:outline-none"
                    />
                    <InputError :message="errors.email" />
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-black">KODEORD</span>
                        <TextLink
                            v-if="canResetPassword"
                            :href="request()"
                            class="text-sm"
                            :tabindex="5"
                        >
                            Glemt login?
                        </TextLink>
                    </div>
                    <PasswordInput
                        id="password"
                        name="password"
                        required
                        :tabindex="2"
                        autocomplete="current-password"
                        placeholder="Password"
                        class="rounded-md border-2 border-gray-300 px-2 py-3 text-sm hover:border-blue-600 focus:border-blue-600 focus:bg-blue-600/5 focus:outline-none"
                    />
                    <InputError :message="errors.password" />
                </div>

                <Button
                    type="submit"
                    class="mt-2 flex h-14 w-full cursor-pointer flex-row justify-between bg-blue-600 px-4 hover:bg-blue-700"
                    :tabindex="4"
                    :disabled="processing"
                    data-test="login-button"
                    size="lg"
                >
                    <span class="font-bold uppercase">Fortsæt</span>

                    <Spinner v-if="processing" />
                    <ArrowRightIcon v-else />
                </Button>
            </div>

            <div class="flex items-center justify-between">
                <Label for="remember" class="flex items-center space-x-3">
                    <Checkbox id="remember" name="remember" :tabindex="3" />
                    <span>Husk mig hos MitId</span>
                </Label>
            </div>

            <hr />

            <div class="mb-4 flex flex-row gap-4 text-sm font-bold">
                <span>Afbryd</span>
                <span>Få hjælp</span>
            </div>
        </Form>
    </AuthBase>
</template>
