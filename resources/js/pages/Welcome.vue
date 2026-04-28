<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { LockOpenIcon } from 'lucide-vue-next';
import FAQCardVue from '@/components/FAQCard.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard, home } from '@/routes';
import type { BreadcrumbItem } from '@/types';
import type { IFAQCard } from '@/types/ui';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);

const cards: IFAQCard[] = [
    {
        title: 'Hvem kan jeg stemme på?',
        picture: '/images/vote.png',
    },
    {
        title: 'Er min stemme anonym?',
        picture: '/images/spy.png',
    },
    {
        title: 'Hvornår er næste valg?',
        picture: '/images/box.png',
    },
    {
        title: 'Har jeg stemmeret?',
        picture: '/images/rights.png',
    },
];

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'stem.dk',
        href: home(),
    },
    {
        title: 'Forside',
        href: home(),
    },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-full bg-white pt-4">
            <div class="flex w-full bg-[#081c55] pl-8">
                <div class="pt-4 pb-4">
                    <h1 class="league-spartan text-3xl font-bold text-white">
                        Valgafstemningen er åben
                    </h1>
                    <p class="text-white">
                        Du kan afgive din stemme til Folketingsvalget 2026
                        online ved at logge ind med MitID. Afstemningen lukker
                        den 24. marts.
                    </p>

                    <div class="my-4">
                        <Link
                            :href="dashboard()"
                            class="inline-flex items-center gap-3 bg-white px-4 py-2 font-bold text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                        >
                            <LockOpenIcon class="size-4" />
                            <div
                                class="h-6 w-px shrink-0 grow bg-gray-400"
                            ></div>
                            Stem nu
                        </Link>
                    </div>

                    <span class="league-spartan text-xl font-bold text-white">
                        Har du spørgsmål?
                    </span>

                    <p class="text-white">
                        Få hjælp til at stemme på vores <u>hjemmeside</u>
                    </p>
                </div>

                <div class="w-1/2 grow bg-white">
                    <img src="/images/laptop.png" />
                </div>
            </div>
        </div>
        <div class="mt-4 bg-white p-4">
            <div class="grid grid-cols-4 gap-4">
                <FAQCardVue v-for="(card, i) in cards" v-bind="card" :key="i" />
            </div>
        </div>
    </AppLayout>
</template>
