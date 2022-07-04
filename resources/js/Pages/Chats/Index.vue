<template>
    <div>
        <div class="min-w-full min-h-full border rounded lg:grid lg:grid-cols-3">
            <div class="border-r border-gray-300 lg:col-span-1">
                <div class="mx-3 my-3">
                    <div class="relative text-gray-600">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </span>
                        <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none"
                            name="search" placeholder="Search" required />
                    </div>
                </div>

                <ChatList />
            </div>
            <div class="hidden lg:col-span-2 lg:block">
                <div class="w-full">
                    <ChatMembers :members="chat.members" />

                    <ChatArea :chat="selectedChat" />

                    <ChatBar :message="(message) => sendMessage(message)" />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import ChatList from './Partials/ChatList.vue';
import ChatArea from './Partials/ChatArea.vue';
import ChatBar from './Partials/ChatBar.vue';
import ChatMembers from './Partials/ChatMembers.vue';

defineProps({
    chats: Array
});

const selectedChat = ref(null);

const setSelectedChat = (chat) => {
    selectedChat.value = chat;
}

const sendMessage = (message) => {
    console.log(message);
}
</script>
