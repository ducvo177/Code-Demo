<template>
  <div>
    <h1 :class="class" :style="{ backgroundColor: color }">{{ message }}</h1>
    <form>
      <label for="email">Email:</label>
      <input type="email" id="email" v-model="email"/>
      <!-- Two way binding -->
      <button type="submit">Submit</button>
    </form>
   
  </div>
</template>

<script>
import { reactive } from "vue";
export default {
  setup() {
    const state= reactive({
      email: "",
      class: "title",
      message: "Welcome to Concrete",
      color: "red",
    });
    return {
      ...state,
    }
  },
};
</script>
