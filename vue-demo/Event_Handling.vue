<template>
    <div>
      <p v-if="check" :title="message">{{ message }}</p>
      <button @click="handleHide">Hide Message</button>
      <form @submit="handleSubmit">
    <label for="email">Email:</label>
    <input @input="handleChange" type="email" id="email" v-model="email">
    <button type="submit">Submit</button>
  </form>
  <h1>{{ email }}</h1>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      handleHide: function () {
        this.check = !this.check;
      },
      handleChange: function () {
        console.log('email input is changing')
      },
      handleSubmit: function () {
        this.email=""
      }
    },
    data() {
      return {
        check: true,
        message: "Welcome to Concrete",
        email:""
      };
    },
  };
  </script>
  