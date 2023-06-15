<template>
    <div>
      <nav>
        <ul class="pagination">
          <li v-if="pagination.prev_page_url" class="page-item">
            <a class="page-link" @click="changePage(pagination.prev_page)" href="#">Previous</a>
          </li>
          <li v-for="page in pages" :key="page" class="page-item" :class="{ active: page === pagination.current_page }">
            <a class="page-link" @click="changePage(page)" href="#">{{ page }}</a>
          </li>
          <li v-if="pagination.next_page_url" class="page-item">
            <a class="page-link" @click="changePage(pagination.next_page)" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </template>

  <script>
  export default {
    props: {
      pagination: {
        type: Object,
        required: true
      }
    },
    computed: {
      pages() {
        if (!this.pagination || !this.pagination.last_page) {
          return [];
        }

        const totalPages = this.pagination.last_page;
        const currentPage = this.pagination.current_page;
        const delta = 2;
        const range = [];
        const rangeWithDots = [];
        let l;

        range.push(1);

        if (totalPages <= 1) {
          return range;
        }

        for (let i = currentPage - delta; i <= currentPage + delta; i++) {
          if (i < totalPages && i > 1) {
            range.push(i);
          }
        }
        range.push(totalPages);

        for (let i of range) {
          if (l) {
            if (i - l === 2) {
              rangeWithDots.push(l + 1);
            } else if (i - l !== 1) {
              rangeWithDots.push("...");
            }
          }
          rangeWithDots.push(i);
          l = i;
        }

        return rangeWithDots;
      }
    },
    methods: {
      changePage(page) {
        this.$emit("page-change", page);
      }
    }
  };
  </script>
