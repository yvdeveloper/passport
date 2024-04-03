<template>
    <div>
      <h1>Delete Contact</h1>
      <p>Are you sure you want to delete this contact?</p>
      <button @click="deleteContact">Delete</button>
    </div>
  </template>

<script>
import axios from 'axios';

export default {
  methods: {
    deleteContact() {
      const contactId = this.$route.params.id;
      axios.delete(`/api/contacts/${contactId}`)
        .then(response => {
          console.log('Contact deleted successfully:', response.data);
          // Redirect or show a success message
        })
        .catch(error => {
          console.error('Error deleting contact:', error);
          // Show an error message
        });
    }
  }
};
</script>

