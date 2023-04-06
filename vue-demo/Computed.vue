<template>
    <div>
      <p>His fullname: {{ fullName }}</p>
      <p>Is adult: {{ isAdult }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        firstName: "Tom",
        lastName: "Cruise",
        age: 12
      }
    },
    computed: {//Được tính toán từ các thuộc tính trong data
      fullName() {
        return this.firstName + " " + this.lastName;
      },
      isAdult() {
        return this.age >= 18;
      }
    }
  }
  </script>