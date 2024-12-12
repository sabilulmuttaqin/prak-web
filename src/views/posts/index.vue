<script setup>
// Import ref and onMounted
import { ref, onMounted } from "vue";

// Import api
import api from "../../api";

// Define state
const posts = ref([]);

// Method fetchDataPosts
const fetchDataPosts = async () => {
  // Fetch data
  await api.get("/posts").then((response) => {
    // Set response data to state "posts"
    posts.value = response.data.data; // Menyesuaikan dengan struktur data API yang diterima
  });
};

// Run hook "onMounted"
onMounted(() => {
  // Call method "fetchDataPosts"
  fetchDataPosts();
});

// Method deletePost
const deletePost = async (id) => {
  // Delete post with API
  await api.delete(`/posts/${id}`).then(() => {
    // Call method "fetchDataPosts" after delete
    fetchDataPosts();
  });
};
</script>

<template>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <router-link
          :to="{ name: 'posts.create' }"
          class="btn btn-md btn-success rounded shadow border-0 mb-3"
          >ADD NEW POST</router-link
        >
        <div class="card border-0 rounded shadow">
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-dark text-white">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col" style="width: 15%">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-if="posts.length === 0">
                  <td colspan="3" class="text-center">
                    <div class="alert alert-danger mb-0">
                      Data Belum Tersedia!
                    </div>
                  </td>
                </tr>
                <tr v-else v-for="(post, index) in posts" :key="index">
                  <td>{{ post.name }}</td>
                  <!-- Display name -->
                  <td>{{ post.description }}</td>
                  <!-- Display description -->
                  <td class="text-center">
                    <router-link
                      :to="{ name: 'posts.edit', params: { id: post.id } }"
                      class="btn btn-sm btn-primary rounded-sm shadow border-0 me-2"
                      >EDIT</router-link
                    >
                    <button
                      @click.prevent="deletePost(post.id)"
                      class="btn btn-sm btn-danger rounded-sm shadow border-0"
                    >
                      DELETE
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
