<template>
  <div class="sticky-top">
    <nav
      class="navbar navbar-expand-lg navbar-dark" style="background-color: black">
      <div class="container-fluid">
      <div><a href="/"><img style="width: 65px;" src="/images/infinity.png" alt=""></a></div>
        <!-- <button id="myDD" class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <button id="myDD" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDarkDropdown"
            aria-controls="collapseExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
            class="navbar-toggler collapsed"
            data-toggle="collapse"
            data-target="#navbarNavDarkDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li v-for="(category, i) in categoryList" :key="i" v-if="categoryList.length">
                  <a class="dropdown-item" :href="`/category/${category.name}`">{{ category.name }}</a>
                </li>
                <hr class="p-0 m-0" />
                <li class="nav-item">
                  <a class="dropdown-item" href="/categories">All Categories</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li>
                <form class="d-flex" style="margin: 0 0px 0rem 11px;">
                    <input class="form-control me-2" v-model="str" type="search" @keyup.enter="searchBlog" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-dark" @click="searchBlog" style="color: #fff !important;">Search</button>
                </form>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categoryList: [],
      str: '',
    };
  },
  methods:{
        searchBlog(){
            // if(this.str == ''){ window.location = '/' }
            window.location = `/search?str=${this.str}`
        }
    },
  async created() {
    const res = await this.callApi("get", "/app/get_categories");
    if (res.status == 200) {
      this.categoryList = res.data;
    } else {
      console.log("Somthing wrong");
    }
  },
};
</script>

<style>

</style>
