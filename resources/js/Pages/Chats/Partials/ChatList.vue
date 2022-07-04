<template>
    <ul class="overflow-auto h-[32rem]">
        <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
        <li v-for="chat in chats">
            <ChatCard :chat="chat" />
        </li>
    </ul>
</template>

<script setup>
import ChatCard from '@/Pages/Chats/Partials/ChatCard.vue';

defineProps({
    chats: Array
});
</script>
