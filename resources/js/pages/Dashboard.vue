<script setup lang="ts">
import { Head, usePage } from '@inertiajs/vue3';
import { CircleChevronRightIcon, XIcon } from 'lucide-vue-next';
import { ref } from 'vue';
import Checkbox from '@/components/ui/checkbox/Checkbox.vue';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import type { BreadcrumbItem, Candidate, Election, Party } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard(),
    },
];

const user = usePage().props.auth.user;

const choosenCandidate = ref<Candidate>();

defineProps<{
    election: Election | undefined;
    parties: Party[];
}>();
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <template v-if="election">
            <div
                class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
            >
                <div>
                    <h1
                        class="league-spartan text-4xl font-black text-[#081c55]"
                    >
                        Din stemmeseddel {{ election.name }}
                    </h1>
                    <span class="text-lg font-semibold text-[#304ea7]">
                        {{ user.district.name }}
                    </span>
                </div>

                <div class="grid max-w-4xl grid-cols-1">
                    <div
                        v-for="party in parties"
                        :key="party.id"
                        class="relative flex flex-row gap-4 p-8"
                    >
                        <img :src="party.icon" class="size-30" />

                        <div class="w-full">
                            <div
                                class="flex w-full flex-row items-center gap-2"
                            >
                                <Checkbox
                                    class="relative rounded-[2px] data-[state=checked]:border-red-700"
                                    :model-value="
                                        choosenCandidate &&
                                        party?.id ==
                                            choosenCandidate?.party_id &&
                                        choosenCandidate?.repr_party
                                    "
                                    @update:model-value="
                                        (state) => {
                                            if (state) {
                                                choosenCandidate =
                                                    party.candidates.find(
                                                        (candidate) =>
                                                            candidate?.party_id ==
                                                                party.id &&
                                                            candidate.repr_party,
                                                    );
                                            } else choosenCandidate = undefined;
                                        }
                                    "
                                >
                                    <div
                                        class="absolute top-1/2 left-1/2 -translate-1/2"
                                    >
                                        <XIcon
                                            class="scale-150 rotate-12 text-red-500"
                                        />
                                    </div>
                                </Checkbox>
                                <Label
                                    class="line-clamp-1 text-2xl font-black"
                                    >{{ party.name }}</Label
                                >
                            </div>

                            <hr class="my-4" />

                            <div class="grid grid-cols-3 gap-4">
                                <div
                                    v-for="candidate in party.candidates.filter(
                                        (candidate) => !candidate.repr_party,
                                    )"
                                    :key="candidate.id"
                                    class="flex flex-row items-center gap-2"
                                >
                                    <Checkbox
                                        class="relative rounded-[2px] data-[state=checked]:border-red-700"
                                        :model-value="
                                            choosenCandidate?.id == candidate.id
                                        "
                                        @update:model-value="
                                            (state) => {
                                                choosenCandidate = state
                                                    ? candidate
                                                    : undefined;
                                            }
                                        "
                                    >
                                        <div
                                            class="absolute top-1/2 left-1/2 -translate-1/2"
                                        >
                                            <XIcon
                                                class="scale-150 rotate-12 text-red-500"
                                            />
                                        </div>
                                    </Checkbox>
                                    <Label class="line-clamp-1">{{
                                        candidate.name
                                    }}</Label>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-0 right-0 w-25 text-center">
                            <span class="text-7xl text-black opacity-50">
                                {{ party.descriptor }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <button
                class="fixed right-5 bottom-5 inline-flex cursor-pointer items-center justify-center gap-3 rounded-md bg-green-400 px-4 py-2 transition-all hover:mr-1 hover:mb-1 hover:bg-green-400/80 hover:shadow-2xl"
                v-if="choosenCandidate"
            >
                Aflever stemmeseddel

                <CircleChevronRightIcon class="size-5" />
            </button>
        </template>
        <template v-else>
            <div class="flex h-full w-full items-center justify-center">
                <span>Der er ingen aktive valg lige nu.</span>
            </div>
        </template>
    </AppLayout>
</template>
