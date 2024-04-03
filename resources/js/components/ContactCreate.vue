<template>
    <div>
      <h1>Create Contact</h1>
      <form @submit.prevent="createContact">
        <input type="text" v-model="name" placeholder="Name">
        <input type="email" v-model="email" placeholder="Email">
        <!-- Add other input fields for contact information -->
        <button type="submit">Create</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        name: '',
        email: '',
        // Add other data properties for contact information
      };
    },
    methods: {
      createContact() {
        const newContact = {
          name: this.name,
          email: this.email,
          // Add other properties for contact information
        };
  
        axios.post('/api/contacts', newContact)
          .then(response => {
            console.log('Contact created successfully:', response.data);
            // Redirect or show a success message
          })
          .catch(error => {
            console.error('Error creating contact:', error);
            // Show an error message
          });
      }
    }
  };
  </script>
  
  