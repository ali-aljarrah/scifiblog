export default {
    data() {
        return {

        }
    },
    methods: {
        async callApi(method, url, dataObi) {
           try {
            return await axios({
                method: method,
                url: url,
                data: dataObi
              });
           } catch(e) {
               return e.response
           }
        },
        i(desc, title="Hey") {
            this.$Notice.info({
                title: title,
                desc: desc
            });
        },
        s(desc, title="Great!") {
            this.$Notice.success({
                title: title,
                desc: desc
            });
        },
        w(desc, title="Oops!") {
            this.$Notice.warning({
                title: title,
                desc: desc
            });
        },
        e(desc, title="Oops") {
            this.$Notice.error({
                title: title,
                desc: desc,
                top: 150,
            });
        },
        swr(desc="Something went wrong! Please try again", title="Oops") {
            this.$Notice.error({
                title: title,
                desc: desc
            });
        },
    },
}
