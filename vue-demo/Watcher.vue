<template>
    <div>
      <p>{{ message }}</p>
      <input v-model="inputMessage">
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        message: "Hello World!",
        inputMessage: ""
      }
    },
    watch: {
      inputMessage(newVal) {
        this.message = newVal.toUpperCase();
      }
    }
  }
  </script>