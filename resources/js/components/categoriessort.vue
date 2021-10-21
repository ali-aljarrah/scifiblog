<template>
  <div>
      <div class="container">
        <h5 v-if="!blogs.length" class="text-nowrap bd-highlight">
          Sorry, This Category do not have any blogs
        </h5>
        <div class="row d-flex justify-content-center" style="margin: 15px 0;">
          <div class="row" style="display: contents;"
          v-for="(b, i) in blogs" :key="i">
                <div class="card text-center m-2 p-0" style="width: 18rem; height: 15rem;">
                    <a :href="`/blog/${b.id}`" style="text-decoration: none; color: black;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border border-5 border-end-0 border-start-0 rounded-2 p-0">{{b.category_id}}</li>
                        </ul>
                        <div class="card-body position-relative" style="height: 195px;">
                            <h3 class="card-title"><b>{{b.title}}</b></h3>
                            <p class="card-text text-dark">{{b.excerpt}}</p>
                        </div>
                    </a>
                </div>
          </div>
        </div>
          <button class="btn" style="background-color: black;">
              <a style="text-decoration: none; color: white;" v-if="blogs.length" :href="`/category/${this.catdata.categoryName}`">Discover All</a>
          </button>
      </div>
    <div class="mb-4"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: {},
      blogs: [],
    };
  },
  props: ["catdata"],
  async created() {
    const res = await this.callApi( 'get', `/category_blog/${this.catdata.categoryName}`);
    if (res.status == 200) {
      this.blogs = res.data;
    } else {
      console.log('Somethins went wrong')
    }
  },
};
</script>
