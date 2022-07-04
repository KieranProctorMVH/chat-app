<template>
    <div class="relative w-full p-6 overflow-y-auto h-[40rem]">
        <ul v-for="message in chat?.messages" class="space-y-2">
            <ChatMessage :message="message" />
        </ul>
    </div>
</template>

<script setup>
import ChatMessage from '@/Pages/Chats/Partials/ChatMessage.vue';

defineProps({
    chat: Object
});
</script>
