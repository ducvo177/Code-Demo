<template>
  <div>
    <p v-if="check" :title="message">{{ message }}</p>
    <button @click="handleHide">Hide Message</button>
    <ul>
      <li v-for="item in items" :key="item.id">{{ item.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  methods: {
    handleHide: function () {
      this.check = !this.check;
    },
  },
  data() {
    return {
      check: true,
      message: "Welcome to Concrete",
      items: [
        { id: 1, name: "Item 1" },
        { id: 2, name: "Item 2" },
        { id: 3, name: "Item 3" },
      ],
    };
  },
};
</script>
