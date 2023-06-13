<template>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container-fluid px-1">
                <h1 class="mt-4">Mission Theme</h1>

                <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee"
                    style=" background: linear-gradient(to right, #069ce6, #d00288, #f79809);box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);">
                    Theme-Create
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" class="ms-5" height="24" viewBox="0 0 24 24">
                        <path
                            d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                    </svg>
                </marquee>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card"
                style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                <div class="card-header"><span class="m-2" style="font-weight:600;">Enter: </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                    </svg>
                </div>
                <div class="card-body">
                    <form @submit.prevent="submitForm">

                        <div class="form-group">
                            <label for="title">
                                <h5>Title :</h5>
                            </label>
                            <input type="text" name="title" v-model="missiontheme.title" class="form-control "
                                id="title" placeholder="Enter title" required>

                        </div>
                        <div class="py-4 d-flex">
                        <label for="status">Status*</label>
                        <select name="status" id="status" v-model="missiontheme.status" class="ms-2 w-25 form-control"
                            required style="background-color:lightskyblue; color: #000000;">
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                        <tfoot>
                            <tr>
                                <td>
                                <div class="card-body btns justify-content d-flex justify-content-between w-25">
                                    <router-link :to="`/missiontheme`" class="" >
                                        <svg clip-rule="evenodd" width="55" height="55" fill-rule="evenodd"
                                            stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path id="svg"
                                                d="m10.978 14.999v3.251c0 .412-.335.75-.752.75-.188 0-.375-.071-.518-.206-1.775-1.685-4.945-4.692-6.396-6.069-.2-.189-.312-.452-.312-.725 0-.274.112-.536.312-.725 1.451-1.377 4.621-4.385 6.396-6.068.143-.136.33-.207.518-.207.417 0 .752.337.752.75v3.251h9.02c.531 0 1.002.47 1.002 1v3.998c0 .53-.471 1-1.002 1zm-1.5-7.506-4.751 4.507 4.751 4.507v-3.008h10.022v-2.998h-10.022z" />
                                        </svg></router-link>
                                    <button type='submit' class="btn btn-outline-warning">
                                        Save
                                    </button>
                                </div>
                            </td>
                            </tr>
                        </tfoot>

                    </form>
                </div>
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
            missiontheme: {
                mission_theme_id: '',
                title: '',
                status: '1',
            },
            errors: {},
            errorMessage: '',
            successMessage: null,
        }
    },

    async created() {

        const response = await axios.get(`/api/missiontheme/${this.$route.params.mission_theme_id}`);


        this.missiontheme = response.data;

    },
    methods: {
        async submitForm() {

            try {

                await axios.post('/api/missiontheme', this.missiontheme)

                this.$router.push('/missiontheme');

            } catch (error) {
                console.error(error);
            }
        }
    }
}

</script>
 <style scoped>
 #marquee {
      border-radius: 10px !important;
    }

</style>
