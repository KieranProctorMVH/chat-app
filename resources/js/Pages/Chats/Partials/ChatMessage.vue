<template>
    <li class="flex" :class="{ 'justify-start': $page.auth.user.id == message.user_id, 'justify-end': $page.auth.user.id != message.user_id }">
        <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow" :class="{ 'bg-gray-100': $page.auth.user.id != message.user_id }">
            <span class="block">{{ message.body }}</span>
        </div>
    </li>
</template>

<script setup>
defineProps({
    message: Object
});
</script>
