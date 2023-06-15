<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-4">User</h1>
                <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee"
                    style=" background: linear-gradient(to right, #069ce6, #d00288, #f79809);box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);">
                    User-Create
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" class="ms-5" height="24" viewBox="0 0 24 24">
                        <path
                            d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                    </svg>
                </marquee>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header"
                        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                        <span class="pr-2" style="font-weight:600">Enter:</span> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-body"
                    style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
                    <div class="container"
                        style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px">
                        <form @submit.prevent="submitForm">
                            <div class="form-row d-flex py-4" id="radioimg">
                                <div class="form-check">
                                    <input class="form-check-input m-1" value="Images/volunteer1.png" v-model="user.avatar"
                                        type="radio" name="avatar" id="avatar1" checked>
                                    <label class="form-check-label p-2 imges " for="avatar1">
                                        <img class="rounded-circle img-fluid" src="/Images/volunteer1.png" alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input  m-1 " value="Images/volunteer2.png"
                                        v-model="user.avatar" type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer2.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer3.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle  img-fluid" src="/Images/volunteer3.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer4.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2  imges" for="avatar1">
                                        <img class="rounded-circle img-fluid" src="/Images/volunteer4.png" alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer5.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer5.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer6.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer6.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer7.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer7.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer8.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer8.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input m-1" v-model="user.avatar" value="Images/volunteer9.png"
                                        type="radio" name="avatar" id="avatar1">
                                    <label class="form-check-label p-2 imges" for="avatar1">
                                        <img class="rounded-circle img-fluid " src="/Images/volunteer9.png"
                                            alt="Alt Images">
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="first_name">
                                            First Name</label>
                                        <input type="text" v-model="user.first_name" name="first_name" class="form-control"
                                            id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">
                                            Last Name</label>
                                        <input type="text" v-model="user.last_name" name="last_name" class="form-control"
                                            id="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Email">
                                            Email</label>
                                        <input type="email" v-model="user.email" name="email" class="form-control" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone_number">
                                            Phone Number</label>
                                        <input type="tel" v-model="user.phone_number" name="phone_number"
                                            class="form-control" id="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="employee_id">
                                            Employee ID</label>
                                        <input type="text" v-model="user.employee_id" name="employee_id"
                                            class="form-control " id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="department">
                                            Department</label>
                                        <select id="inputState" v-model="user.department" name="department"
                                            class="form-control">
                                            <option selected>Choose...</option>
                                            <option value="HR">HR</option>
                                            <option value="Development">Development</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Deployment">Deployment</option>
                                            <option value="Manager">Manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <label for="profile_text">
                                            About You</label>
                                        <textarea class="form-control" v-model="user.profile_text" id="profile_text"
                                            name="profile_text"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="country_id">Country:</label>
                                        <select v-model="user.country_id" id="country_id" name="country_id"
                                            class="form-control">
                                            <option value="">Select Country</option>
                                            <option v-for="country in countries" :value="country.country_id"
                                                :key="country.country_id">
                                                {{ country.id }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="city">city</label>
                                        <select class="form-control " v-model="user.city" name="city_id" id="city-dropdown">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12  ">
                                <div class="py-4 d-flex">
                                    <label for="status">Status*</label>
                                    <select name="status" id="status" v-model="user.status" class="ms-2 w-25 form-control"
                                        required style="background-color:lightskyblue; color: #000000;">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body btns justify-content d-flex justify-content-between w-25">
                                <router-link :to="`/user`" class="">
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
            selectedCountry: '',
            countries: [],
            user: {
                user_id: '',
                first_name: '',
                last_name: '',
                email: '',
                phone_number: '',
                password: '',
                country_id: '',
                city_id: '',
                employee_id: '',
                department: '',
                profile_text: '',
                avatar: '',
                linked_in_url: '',
                why_i_volunteer: '',
                title: '',
                manager: '',
                availability: '',
                status: '1',
                selectedCountry: '',
            },
            errors: {},
            errorMessage: '',
            successMessage: null,
        }
    },


    mounted() {
        this.fetchCountries();

    },

    methods: {
        fetchCountries() {
            axios.get('/countries')
                .then(response => {
                    // Assign the fetched countries data to the countries property
                    this.countries = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },

        async submitForm() {

            try {

                await axios.post('/api/user', this.user)

                this.$router.push('/user');

            } catch (error) {
                console.error(error);
            }
        },

    }
}

</script>















<style scoped>
@import 'https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css';

.breadcrumb {
    display: flex;
    justify-content: space-between;
}

.imges>img {
    width: 60px;
    height: 60px;
    box-shadow: rgb(11, 11, 12) 0px 0px 0px 3px, rgb(193, 27, 152) 0px 0px 0px 6px,
        rgb(79, 14, 190) 0px 0px 0px 9px, rgb(8, 115, 74) 0px 0px 0px 12px,
        rgb(8, 197, 255) 0px 0px 0px 15px;
}

.btn-outline-success,
.btn-outline-danger {
    margin: 10px;
}
</style>
