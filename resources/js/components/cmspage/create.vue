<template>
    <div class="container px-4">
        <h1 class="mt-4">CMS Page</h1>
        <marquee class="breadcrumb p-3   w-25 " id="marquee">
            CMS-Create
            <svg width="24" height="24" class="ms-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd">
                <path
                    d="M9 23h-5.991c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h18.008c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-6.003v-6h-6.014v6zm13.172-9h-20.302l10.124-8.971 10.178 8.971zm-10.169-13s9.046 7.911 11.672 10.244c.413.367.45.999.083 1.412-.367.413-.996.445-1.412.083-2.421-2.105-10.343-9.063-10.343-9.063s-7.899 6.893-10.327 9.051c-.413.367-1.046.329-1.413-.083-.367-.413-.329-1.045.083-1.412 2.626-2.333 11.657-10.232 11.657-10.232zm.01 7c1.104 0 2 .896 2 2s-.896 2-2 2c-1.105 0-2.001-.896-2.001-2s.896-2 2.001-2zm7.003-5h2.984v5.128l-2.984-2.59v-2.538z" />
            </svg>
        </marquee>
        <div class="card mb-4">
            <div class="card-header">
                <span>Add</span>
            </div>
            <div class="card-body">
                <div class="container">
                    <h2 >Add cmspage</h2>
                    <!-- <h2 v-else>Edit cmspage</h2> -->
                    <form @submit.prevent="submitForm">

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Title">Title*</label>
                                <input type="text" v-model="cmspage.title" name="title" class="form-control " id="" required>
                                <div v-if="errors.title" class="text-danger">{{ errors.title[0] }}</div>
                                <!-- @error('title')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror -->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress" class="form-label ">Description*</label>
                                <textarea name="text" v-model="cmspage.text" class=" form-control " id="editor1"></textarea>
                                <!-- @error('text')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror -->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="slug">Slug*</label>
                                <input type="text" name="slug" v-model="cmspage.slug" class="form-control" id="">
                                <!-- class="form-control @error('slug') is-invalid @enderror" -->
                                <!-- @error('slug')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror -->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="status">Status*</label>
                                <select name="status" id="status" v-model="cmspage.status" class="form-control" required>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                                <!-- @error('status')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror -->
                            </div>
                            <div class="col-md-12 py-4 mr-5">

                                <!-- <button
                                    class="btn apply-btn px-3 rounded-pill float-end btn-outline-warning"
                                    type="submit">Save</button> -->
                                <button class="btn apply-btn px-3 rounded-pill float-end btn-outline-warning"
                                    type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

import axios from 'axios';


export default {
    data() {
        return {
            cmspage: {
                title: '',
                text: '',
                slug: '',
                status: '1',
            },
            errors: {},
            errorMessage:'',
            successMessage:null,
        }
    },

    // computed: {
    //     isNewpage() {

    //         return !this.$route.path.includes('edit');

    //     }
    // },
    async created() {
        // if (!this.isNewpage) {
            const response = await axios.get(`/api/cmspages/${this.$route.params.cms_page_id}`);

            // const response = await axios.get(`/api/cmspages/${this.$route.params.id}`);
            this.cmspage = response.data;
        // }
    },
    methods: {
        async submitForm() {

            try {

                // if (this.isNewpage) {
                    await axios.post('/api/cmspages', this.cmspage)
                        // .then((response) => {
                        //     // Handle successful registration
                        //     this.successMessage = response.data.message;
                        //     console.log(response.data);
                        //     // Redirect or show success message as needed
                        // })
                        // .catch((error) => {
                        //     // Handle registration errors
                        //     if (error.response.status === 422) {
                        //         this.errors = error.response.data.errors;
                        //     } else if (error.response.status === 500) {
                        //         this.errorMessage = error.response.data.message;
                        //     } else {
                        //         this.errorMessage = 'An error occurred. Please try again.';
                        //     }
                        // })
                // } else {
                //     console.log(this.cmspage);
                //     await axios.put(`/api/cmspages/${this.$route.params.cms_page_id}`, this.cmspage);

                // }
                this.$router.push('/cmspage');

            } catch (error) {
                console.error(error);
            }
        }
    }
}

</script>

<style scoped>
@import 'https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css';


.error {
    color: red;
}

tr {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
        rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

#card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}

.success {
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}

#tf {
    border: none;
}


#marquee {
    border-radius: 10px;
    background: linear-gradient(to left, #069ce6, #d00288, #f79809);
    box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);
}


.pagination .page-link:before,
.pagination .page-link:after {
    display: inline-block;
    font-weight: bold;
}

.pagination .previous .page-link:before,
.pagination .next .page-link:after {
    display: none;
}

.pagination .page-link {
    background-color: rgba(255, 255, 255, 0.779);
    border-color: rgb(174, 169, 166);
    margin: 8px;
    color: rgb(218, 77, 7);
}

.pagination .page-link:hover {
    background-color: #ff6701;
    border-color: #ff4d00;
    color: white;
}

.pagination .page-item.active .page-link {
    background-color: #ff6701;
    border-color: #ff6701;
    color: white;
}
</style>
