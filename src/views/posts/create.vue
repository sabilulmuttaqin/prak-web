<script setup>
// Import ref
import { ref } from "vue";

// Import router
import { useRouter } from "vue-router";

// Import API
import api from "../../api";

// Init router
const router = useRouter();

// Define state
const name = ref("");
const description = ref("");
const errors = ref([]);

// Method "storePost"
const storePost = async () => {
  // Initialize FormData
  let formData = new FormData();

  // Assign state values to FormData
  formData.append("name", name.value);
  formData.append("description", description.value);

  try {
    // Store data with API
    const response = await api.post("/posts", formData);
    console.log("Success:", response.data);

    // Redirect to posts page
    router.push({ path: "/posts" });
  } catch (error) {
    console.error("Error:", error.response?.data);
    // Assign response error data to state "errors"
    errors.value = error.response?.data || ["An unknown error occurred"];
  }
};
</script>

<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 rounded shadow">
          <div class="card-body">
            <form @submit.prevent="storePost()">
              <div class="mb-3">
                <label class="form-label fw-bold">Name</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="name"
                  placeholder="Title Post"
                />
                <div v-if="errors.name" class="alert alert-danger mt-2">
                  <span>{{ errors.name[0] }}</span>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea
                  class="form-control"
                  v-model="description"
                  rows="5"
                  placeholder="Content Post"
                ></textarea>
                <div v-if="errors.description" class="alert alert-danger mt-2">
                  <span>{{ errors.description[0] }}</span>
                </div>
              </div>
              <button
                type="submit"
                class="btn btn-md btn-primary rounded-sm shadow border-0"
              >
                Save
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
