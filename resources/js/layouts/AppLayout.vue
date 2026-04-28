<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import Vote from '@/components/Vote.vue';
import { home } from '@/routes';
import type { BreadcrumbItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div
        class="flex min-h-screen flex-col bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#0a0a0a]"
    >
        <header class="w-full text-sm">
            <nav
                class="flex items-center justify-between gap-4 bg-[#081c55] px-8 py-4"
            >
                <Link :href="home()">
                    <AppLogoIcon class-name="text-white" />
                </Link>

                <div>
                    <Vote />
                </div>
            </nav>
            <div class="bg-[#2a649b] py-1"></div>
        </header>
        <nav>
            <div
                class="mx-auto flex h-12 w-full items-center justify-start px-4 md:max-w-7xl"
            >
                <Breadcrumbs :breadcrumbs="breadcrumbs" />
            </div>
        </nav>
        <main class="h-full w-full grow bg-[#e7e7e7] p-6">
            <slot />
        </main>
    </div>
</template>
