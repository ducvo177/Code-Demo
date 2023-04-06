<template>
    <div>
     <h1 :class="class" :style="{backgroundColor:color}">{{ message }}</h1>
     <form>
    <label for="email">Email:</label>
    <input type="email" id="email" v-model="email">
    <!-- Two way binding -->
    <button type="submit">Submit</button>
  </form>
  <p>{{ email }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email:"",
        class:'title',
        message: "Welcome to Concrete",
        color:"red",
      };
    },
  };
  </script>
  