<template>
    <div class="container w-50">
        <div class="row mt-5" style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
            <div class="col-lg-12">
                <table class="table mt-4 text-center text-capitalize">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <h1> Data - {{ cmspage.cms_page_id }} </h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <h5>Title:</h5>
                                    <h5 class="card-title ms-2  text-info">{{ cmspage.title }}</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <h5>Text:</h5>
                                    <h5 class="card-title ms-2  text-info">{{ cmspage.text }}</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <h5>Slug:</h5>
                                    <h5 class="card-title ms-2  text-info">{{ cmspage.slug }}</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="m-3">
                                <div class="d-flex">
                                    <h5>Status:</h5>
                                    <h5 class="car  ms-2" :class="getStatusLabel(cmspage.status)">{{ getStatusLabel(cmspage.status)
                                    }}</h5>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-secondary bg-gradient">
                        <tr>
                            <td>
                                <div class="card-body btns text-center ">
                                    <router-link to="/cmspage" class="nav-link text-white"
                                        style="text-decoration: none; color: white;"><svg class="bi d-block mx-auto mb-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4.5 21q-.625 0-1.063-.438T3 19.5v-1.9l4-3.55V21H4.5ZM8 21v-4h8v4H8Zm9 0v-8.2L12.725 9l3.025-2.675l4.75 4.225q.25.225.375.513t.125.612V19.5q0 .625-.438 1.063T19.5 21H17ZM3 16.25v-4.575q0-.325.125-.625t.375-.5L11 3.9q.2-.2.463-.287T12 3.525q.275 0 .537.088T13 3.9l2 1.775L3 16.25Z" />
                                        </svg>Home</router-link>

                                    <!-- <a href="{{ route('missionskill.index') }}" class="btn btn-outline-dark">Back</a> -->
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            cmspage: {},
        };
    },


    created() {
        console.log('Component created');
        console.log('cms_page_id:', this.$route.params.cms_page_id);
        axios.get(`/api/cmspages/${this.$route.params.cms_page_id}`)
            .then(response => {
                console.log('API response:', response.data);
                this.cmspage = response.data;
            })
            .catch(error => {
                console.error(error);
            });
    },
    methods: {

        getStatusLabel(status) {
            return status == 1 ? 'Active' : 'Inactive';
        }
    }

};
</script>
<style>.Active {
    color: rgb(58, 195, 58)  !important;

}

.Inactive {
    color: red  !important;
}</style>
