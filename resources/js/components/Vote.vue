<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { LockOpenIcon } from 'lucide-vue-next';
import { dashboard, login } from '@/routes';
</script>

<template>
    <Link
        v-if="$page.props.auth.user"
        :href="dashboard()"
        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
    >
        Stemmekort
    </Link>
    <template v-else>
        <Link
            :href="login()"
            class="inline-flex items-center gap-4 bg-white px-3 py-2 font-bold text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
        >
            <LockOpenIcon class="size-4" />
            Log på
        </Link>
    </template>
</template>
