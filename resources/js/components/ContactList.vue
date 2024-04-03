<template>
    <div>
        <h1>Contact List</h1>
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
                {{ contact.name }} - {{ contact.email }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            contacts: []
        };
    },
    mounted() {
        // Fetch contacts from Laravel API
        axios.get('/api/contacts')
            .then(response => {
                console.log('hit');
                this.contacts = response.data;
            })
            .catch(error => {
                console.error('Error fetching contacts:', error);
            });
    }
};
</script>
