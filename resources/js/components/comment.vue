<template>
  <div>
    <div class="container d-flex justify-content">
      <div class="card" style="width: 75%;">
        <h2 class="card-header"><b>Comments</b></h2>
        <p class="card-title fw-bolder" style="margin-left: 16px; margin-top: 8px;" v-if="!comments.length">Sorry, No Comments!</p>
        <!-- comment -->
        <div class="border m-2" style="background-color: #f2f2f2;" v-for="(comment, i) in comments" :key="i">
          <div class="card-body">
            <div class="justify-content">
              <p class="" style="float: right; top: 0;">{{  comment.created_at | timeformat }}</p>
              <h3 class="card-title fw-bolder">{{ comment.name }}</h3>
              <p class="card-title">{{ comment.email }}</p>
            </div>
            <div>
                <h3 class="card-text border mt-2 p-2 fw-bolder" style="font-weight: 700;">{{ comment.comment }}</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- comment -->
    </div>

    <!--WRITE COMMENT BOX -->
    <div class="mt-5 ml-3">
      <h2 class="fw-bolder mb-2">Leave A Comment</h2>

            <div class="form-group">
                <label class="fs-5" for="usr">Name:</label>
                <input type="text" class="form-control" v-model="data.name" placeholder="Enter your name"
                id="usr" style="width: 50%;">
            </div>

            <div class="form-group">
                <label class="fs-5" for="usr">E-mail:</label>
                <input type="email" class="form-control" v-model="data.email" placeholder="Enter your E-MAIL"
                id="usrEmail" style="width: 50%;">
            </div>

            <div class="form-group">
                <label class="fs-5" for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"
                v-model="data.comment"
                @keyup.enter="saveComment"
                placeholder="Type your comment"
                rows="3" style="width: 50%;"></textarea>
            </div>

          <div class="">
            <button type="button" class="btn" style="background-color: black; color: white;" @click="saveComment">Post Comment</button>
          </div>
    </div>
    <!--WRITE COMMENT BOX -->
  </div>
</template>


<script>
export default {
  data() {
    return {
      data: {
        name: "",
        email: "",
        comment: "",
        blog_id: this.blogdata.blog_id,
      },
      comments: [],
    };
  },
  props: ["blogdata"],
  methods: {
    async saveComment() {
      //console.log('hey')
      if (this.data.name.trim() == "") return this.e("Name is required");
      if (this.data.email.trim() == "") return this.e("Email is required");
      if (this.data.comment.trim() == "") return this.e("Comment is required");
      const res = await this.callApi("post", "/app/save_comment", this.data);
      if (res.status == 201) {
        //this.s("Comment has been posted successfully!");
        this.comments.unshift(res.data);
        this.data.name = "";
        this.data.email = "";
        this.data.comment = "";
      } else {
        console.log('Somethins went wrong')
      }
    },
  },
  async created() {
    const res = await this.callApi("get", `/app/get_comments/${this.blogdata.blog_id}`);
    if (res.status == 200) {
      this.comments = res.data;
    } else {
      console.log('Somethins went wrong')
    }
  },
};
</script>


