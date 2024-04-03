<template>
    <div>
      <h1>Edit Contact</h1>
      <form @submit.prevent="updateContact">
        <input type="text" v-model="contact.name" placeholder="Name">
        <input type="email" v-model="contact.email" placeholder="Email">
        <!-- Other input fields for contact information -->
        <button type="submit">Update</button>
      </form>
    </div>
  </template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      contact: {
        name: '',
        email: '',
        phone: '',
        country: '',
        city: '',
        state: '',
        zip_code: ''
      }
    };
  },
  mounted() {
    const contactId = this.$route.params.id; // Get the contact ID from the route parameter
    axios.get(`/api/contacts/${contactId}`)
      .then(response => {
        this.contact = response.data;
      })
      .catch(error => {
        console.error('Error fetching contact:', error);
      });
  },
  methods: {
    updateContact() {
      axios.put(`/api/contacts/${this.$route.params.id}`, this.contact)
        .then(response => {
          console.log('Contact updated successfully:', response.data);
          // Redirect or show a success message
        })
        .catch(error => {
          console.error('Error updating contact:', error);
          // Show an error message
        });
    }
  }
};
</script>

