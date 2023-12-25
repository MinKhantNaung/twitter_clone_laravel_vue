<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/TwitterLayout.vue'
import Tweet from '@/Components/Tweet.vue'
</script>

<template>
    <Head title="Welcome" />

    <TwitterLayout>
        <div class="text-white">
            <!-- Tweet Section Start -->
            <div class="flex">
                <Tweet :tweet="{
                    name: 'Min Khant Naung',
                    handle: '@minkhantnaung',
                    image: 'https://randomuser.me/api/portraits/men/40.jpg',
                    tweet: 'We went rock climbing this weekend? Here is the video. Climbing is way more fun,Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia fugiat perferendis laboriosam maxime debitis suscipit at eligendi autem! Dolor blanditiis ducimus iure quod magni animi beatae eum nisi fugiat commodi!',
                    file: '/storage/videos/TR-1.mp4',
                    is_video: true,
                    comments: '35',
                    retweets: '54',
                    likes: '88',
                    analytics: '81'
                }" />
            </div>
            <div class="border-b border-b-gray-800 mt-2"></div>
            <!-- Tweet Section End -->
        </div>
    </TwitterLayout>
</template>
