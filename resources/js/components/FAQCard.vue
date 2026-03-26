<script setup lang="ts">
import type { IFAQCard } from '@/types/ui';

defineProps<IFAQCard>();
</script>

<template>
    <div>
        <div class="aspect-video w-full bg-blue-600">
            <img
                v-if="picture.length"
                :src="picture"
                class="h-full w-full object-cover"
            />
        </div>
        <span class="league-spartan font-bold underline underline-offset-2">
            {{ title }}
        </span>
    </div>
</template>
