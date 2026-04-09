<script setup lang="ts">
defineProps<{
    title?: string;
    description?: string;
}>();

const tabs = [
    {
        title: 'MitID',
        selected: true,
    },
    {
        title: 'Lokalt login',
        selected: false,
    },
];

const info_cards = [
    {
        title: 'Driftstatus',
        description: 'Normal drift',
    },
    {
        title: 'Sikker brug af MitId',
        description: 'bla',
    },
    {
        title: 'Mere information',
        description: 'bla ',
    },
];
</script>

<template>
    <div class="flex flex-col items-center justify-center">
        <div
            class="flex w-full flex-col items-center justify-center bg-gray-100"
        >
            <div class="w-full p-8">
                <img src="/images/MitIdLogin.svg" />
            </div>

            <div class="flex w-full max-w-4xl flex-row">
                <div v-for="(tab, i) in tabs" :key="i">
                    <div
                        :class="[
                            'relative px-8 py-3',
                            tab.selected && 'bg-white',
                        ]"
                    >
                        <div
                            v-if="tab.selected"
                            class="absolute top-0 left-0 h-0.75 w-full bg-blue-600"
                        />
                        <span class="font-semibold">{{ tab.title }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-16 flex w-full max-w-4xl flex-row gap-20">
            <div
                class="flex w-1/2 flex-col gap-4 rounded-sm border border-gray-200 px-6 py-4"
            >
                <div class="flex flex-row items-center justify-between">
                    <span class="font-bold">
                        {{ title }}
                    </span>

                    <div>
                        <img src="images/MitIdLogo.webp" class="max-h-10" />
                    </div>
                </div>

                <hr />

                <slot />
            </div>

            <div class="flex w-1/2 flex-col gap-4">
                <div v-for="(card, i) in info_cards" :key="i">
                    <div class="w-fit rounded-t-lg bg-blue-100/50 px-6 py-2">
                        <span class="text-xs font-bold">{{ card.title }}</span>
                    </div>
                    <p
                        class="border border-gray-200 p-4 text-xs"
                        v-html="card.description"
                    ></p>
                </div>
            </div>
        </div>
    </div>
</template>
