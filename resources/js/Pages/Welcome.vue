<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/TwitterLayout.vue'
import Tweet from '@/Components/Tweet.vue'

defineProps({
    tweets: Object
})

</script>

<template>
    <Head title="Welcome" />

    <TwitterLayout>
        <div class="text-white">
            <!-- Tweet Section Start -->
            <div v-for="tweet in tweets" :key="tweet.id">
                <div class="flex">
                    <Tweet :tweet="tweet" />
                </div>
                <div class="border-b border-b-gray-800 mt-2"></div>
            </div>
            <!-- Tweet Section End -->
        </div>
    </TwitterLayout>
</template>
