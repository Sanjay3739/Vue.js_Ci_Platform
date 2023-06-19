<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-4">User</h1>
                <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee"
                    style=" background: linear-gradient(to right, #069ce6, #d00288, #f79809);box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);">
                    User-Update
                    <svg xmlns="http://www.w3.org/2000/svg" class="ms-5" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12.255 21.954c-.443.03-.865.046-1.247.046-3.412 0-8.008-1.002-8.008-2.614v-2.04c2.197 1.393 5.513 1.819 8.099 1.778-.146-.64-.161-1.39-.085-1.998h-.006c-3.412 0-8.008-1.001-8.008-2.613v-2.364c2.116 1.341 5.17 1.78 8.008 1.78l.569-.011.403-2.02c-.342.019-.672.031-.973.031-3.425-.001-8.007-1.007-8.007-2.615v-2.371c2.117 1.342 5.17 1.78 8.008 1.78 2.829 0 5.876-.438 7.992-1.78v2.372c0 .871-.391 1.342-1 1.686 1.178 0 2.109.282 3 .707v-7.347c0-3.361-5.965-4.361-9.992-4.361-4.225 0-10.008 1.001-10.008 4.361v15.277c0 3.362 6.209 4.362 10.008 4.362.935 0 2.018-.062 3.119-.205-1.031-.691-1.388-1.134-1.872-1.841zm-1.247-19.954c3.638 0 7.992.909 7.992 2.361 0 1.581-5.104 2.361-7.992 2.361-3.412.001-8.008-.905-8.008-2.361 0-1.584 4.812-2.361 8.008-2.361zm6.992 15h-5l1-5 1.396 1.745c.759-.467 1.647-.745 2.604-.745 2.426 0 4.445 1.729 4.901 4.02l-1.96.398c-.271-1.376-1.486-2.418-2.941-2.418-.483 0-.933.125-1.335.331l1.335 1.669zm5 2h-5l1.335 1.669c-.402.206-.852.331-1.335.331-1.455 0-2.67-1.042-2.941-2.418l-1.96.398c.456 2.291 2.475 4.02 4.901 4.02.957 0 1.845-.278 2.604-.745l1.396 1.745 1-5z" />
                    </svg>

                </marquee>

            </div>
            <div class="col-lg-12">
                <div class="row card mb-4"
                    style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <div class="col-lg-12">
                        <div class="card-header"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12.255 21.954c-.443.03-.865.046-1.247.046-3.412 0-8.008-1.002-8.008-2.614v-2.04c2.197 1.393 5.513 1.819 8.099 1.778-.146-.64-.161-1.39-.085-1.998h-.006c-3.412 0-8.008-1.001-8.008-2.613v-2.364c2.116 1.341 5.17 1.78 8.008 1.78l.569-.011.403-2.02c-.342.019-.672.031-.973.031-3.425-.001-8.007-1.007-8.007-2.615v-2.371c2.117 1.342 5.17 1.78 8.008 1.78 2.829 0 5.876-.438 7.992-1.78v2.372c0 .871-.391 1.342-1 1.686 1.178 0 2.109.282 3 .707v-7.347c0-3.361-5.965-4.361-9.992-4.361-4.225 0-10.008 1.001-10.008 4.361v15.277c0 3.362 6.209 4.362 10.008 4.362.935 0 2.018-.062 3.119-.205-1.031-.691-1.388-1.134-1.872-1.841zm-1.247-19.954c3.638 0 7.992.909 7.992 2.361 0 1.581-5.104 2.361-7.992 2.361-3.412.001-8.008-.905-8.008-2.361 0-1.584 4.812-2.361 8.008-2.361zm6.992 15h-5l1-5 1.396 1.745c.759-.467 1.647-.745 2.604-.745 2.426 0 4.445 1.729 4.901 4.02l-1.96.398c-.271-1.376-1.486-2.418-2.941-2.418-.483 0-.933.125-1.335.331l1.335 1.669zm5 2h-5l1.335 1.669c-.402.206-.852.331-1.335.331-1.455 0-2.67-1.042-2.941-2.418l-1.96.398c.456 2.291 2.475 4.02 4.901 4.02.957 0 1.845-.278 2.604-.745l1.396 1.745 1-5z" />
                            </svg>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="container"
                                style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                                <form class="m-3" @submit.prevent="submitForm" enctype="multipart/form-data">
                                    <div class="form-row d-flex py-4" id="radioimg">
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer1.png" type="radio" name="avatar1" id="avatar1">
                                            <label class="form-check-label p-2 imges " for="avatar1">
                                                <img class="rounded-circle img-fluid" src="/Images/volunteer1.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input  m-1 " v-model="user.avatar"
                                                value="Images/volunteer2.png" type="radio" name="avatar2" id="avatar2">
                                            <label class="form-check-label p-2 imges" for="avatar2">
                                                <img class="rounded-circle img-fluid " src="/Images/volunteer2.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer3.png" type="radio" name="avatar3" id="avatar3">
                                            <label class="form-check-label p-2 imges" for="avatar3">
                                                <img class="rounded-circle  img-fluid" src="/Images/volunteer3.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer4.png" type="radio" name="avatar4" id="avatar4">
                                            <label class="form-check-label p-2  imges" for="avatar4">
                                                <img class="rounded-circle img-fluid" src="/Images/volunteer4.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer5.png" type="radio" name="avatar5" id="avatar5">
                                            <label class="form-check-label p-2 imges" for="avatar5">
                                                <img class="rounded-circle img-fluid " src="/Images/volunteer5.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer6.png" type="radio" name="avatar6" id="avatar6">
                                            <label class="form-check-label p-2 imges" for="avatar6">
                                                <img class="rounded-circle img-fluid " src="/Images/volunteer6.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer7.png" type="radio" name="avatar7" id="avatar7">
                                            <label class="form-check-label p-2 imges" for="avatar7">
                                                <img class="rounded-circle img-fluid " src="/Images/volunteer7.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer8.png" type="radio" name="avatar8" id="avatar8">
                                            <label class="form-check-label p-2 imges" for="avatar8">
                                                <img class="rounded-circle img-fluid " src="/Images/volunteer8.png"
                                                    alt="Alt Images">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input m-1" v-model="user.avatar"
                                                value="Images/volunteer9.png" type="radio" name="avatar9" id="avatar9">
                                            <label class="form-check-label p-2 imges" for="avatar9">
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
                                                <input type="text" name="first_name" v-model="user.first_name"
                                                    class="form-control" id="">
                                                <div v-if="validationErrors.first_name" class="text-danger">
                                                    {{ validationErrors.first_name[0] }}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="last_name">
                                                    Last Name</label>
                                                <input type="text" name="last_name" v-model="user.last_name"
                                                    class="form-control" id="">
                                                <div v-if="validationErrors.last_name" class="text-danger">
                                                    {{ validationErrors.last_name[0] }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Email">
                                                    Email</label>
                                                <input type="email" name="email" v-model="user.email" class="form-control"
                                                    id="">
                                                <div v-if="validationErrors.email" class="text-danger">
                                                    {{ validationErrors.email[0] }}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone_number">
                                                    Phone Number</label>
                                                <input type="tel" name="phone_number" v-model="user.phone_number"
                                                    class="form-control" id="">
                                                <div v-if="validationErrors.phone_number" class="text-danger">
                                                    {{ validationErrors.phone_number[0] }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="employee_id">
                                                    Employee ID</label>
                                                <input type="text" name="employee_id" v-model="user.employee_id"
                                                    class="form-control " id="">
                                                <div v-if="validationErrors.employee_id" class="text-danger">
                                                    {{ validationErrors.employee_id[0] }}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="department">
                                                    Department</label>
                                                <select id="inputState" v-model="user.department" name="department"
                                                    class="form-control">
                                                    
                                                    <option value="HR">HR</option>
                                                    <option value="Development">Development</option>
                                                    <option value="Sales">Sales</option>
                                                    <option value="Deployment">Deployment</option>
                                                    <option value="Manager">Manager</option>
                                                </select>
                                                <div v-if="validationErrors.department" class="text-danger">
                                                    {{ validationErrors.department[0] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="profile_text">About You</label>
                                            <textarea class="form-control" v-model="user.profile_text" id="profile_text"
                                                name="profile_text"></textarea>
                                            <div v-if="validationErrors.profile_text" class="text-danger">
                                                {{ validationErrors.profile_text[0] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="country_id">Country:</label>
                                                <select v-model="user.country_id" id="country_id" name="country_id"
                                                    class="form-control">
                                                    <option value="">Select Country</option>
                                                    <option v-for="country in countries" :value="country.country_id"
                                                        :key="country.country_id">
                                                        {{ country.name }}
                                                    </option>
                                                </select>
                                                <div v-if="validationErrors.country_id" class="text-danger">
                                                    {{ validationErrors.country_id[0] }}
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="city">city</label>
                                                <select class="form-control " v-model="user.city" name="city_id"
                                                    id="city-dropdown">
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12  ">
                                        <div class="py-4 d-flex">
                                            <label for="status">Status*</label>
                                            <select name="status" id="status" v-model="user.status"
                                                class="ms-2 w-25 form-control" required
                                                style="background-color:lightskyblue; color: #000000;">
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
            validationErrors: {},
        }
    },


    async created() {
        const response = await axios.get(`/api/user/${this.$route.params.user_id}`);
        this.user = response.data;
        console.log(this.user);
        this.fetchCountries();

    },
    methods: {
        fetchCountries() {
            axios.get('/api/countries')
                .then(response => {
                    this.countries = response.data.countries;
                    console.log(this.countries);
                })
                .catch(error => {
                    console.error(error);
                });
        },
        async submitForm() {
            try {
                console.log(this.user);
                await axios.put(`/api/user/${this.$route.params.user_id}`, this.user);
                this.$router.push('/user');
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    if (error.response.data && error.response.data.errors) {
                        this.validationErrors = error.response.data.errors;
                    } else {
                        this.errorMessage = 'Validation failed. Please check the form.';
                    }
                } else {
                    this.errorMessage = 'An error occurred while saving the user page.';
                    console.error(error);
                }
            }
        },

    }
}

</script>
<style scoped>
.breadcrumb {

    display: flex;
    justify-content: space-between;
}

marquee {
    border-radius: 10px !important;

}

.imges>img {
    width: 60px;
    height: 60px;
    box-shadow: rgb(11, 11, 12) 0px 0px 0px 3px, rgb(193, 27, 152) 0px 0px 0px 6px,
        rgb(79, 14, 190) 0px 0px 0px 9px, rgb(8, 115, 74) 0px 0px 0px 12px,
        rgb(8, 197, 255) 0px 0px 0px 15px;
}
</style>
