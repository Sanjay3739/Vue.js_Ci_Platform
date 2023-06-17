<template>
    <div class="container">
        <h1 class="mt-4">Mission Skill</h1>
        <div class="flex">
            <marquee class="breadcrumb mb-4 p-3 w-25 "
                style=" background: linear-gradient(to right, #069ce6, #d00288, #f79809);box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);">
                Skill-Create
                <svg xmlns="http://www.w3.org/2000/svg" width="24" class="ms-5" height="24" viewBox="0 0 24 24">
                    <path
                        d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                </svg>

            </marquee>
            <div v-for="(errors, field) in validationErrors" :key="field">
                <div v-for="error in errors" :key="error" class="alert alert-danger">
                    {{ error }}
                </div>
            </div>
        </div>

        <div class="card mb-4" style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
            <div class="card-header" style="display:flex;">
                <span class="m-2" style="font-weight:600;">Enter: </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="m-2" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M9 19h-4v-2h4v2zm2.946-4.036l3.107 3.105-4.112.931 1.005-4.036zm12.054-5.839l-7.898 7.996-3.202-3.202 7.898-7.995 3.202 3.201zm-6 8.92v3.955h-16v-20h7.362c4.156 0 2.638 6 2.638 6s2.313-.635 4.067-.133l1.952-1.976c-2.214-2.807-5.762-5.891-7.83-5.891h-10.189v24h20v-7.98l-2 2.025z" />
                </svg>
            </div>
            <div class="card-body">
                <form @submit.prevent="submitForm">

                    <label for="skill_name">Skill Name</label>
                    <input type="text" v-model="missionskill.skill_name" class='form-control' name='skill_name'>
                    <div v-if="validationErrors.skill_name" class="text-danger">
                        {{ validationErrors.skill_name[0] }}
                    </div>

                    <div class="py-4 d-flex">
                        <label for="status">Status*</label>
                        <select name="status" id="status" v-model="missionskill.status" class="ms-2 w-25 form-control"
                            required style="background-color:lightskyblue; color: #000000;">
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <tfoot>
                        <tr>
                            <td>
                                <div class="card-body btns justify-content d-flex justify-content-between w-25">
                                    <router-link :to="`/missionskill`" class="">
                                        <svg clip-rule="evenodd" width="55" height="55" fill-rule="evenodd"
                                            stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
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
</template>

<script>

import axios from 'axios';


export default {
    data() {
        return {
            missionskill: {
                skill_id: '',
                skill_name: '',
                status: '1',
            },
            errorMessage: '',
            validationErrors: {},

        }
    },
    methods: {
        async submitForm() {

            try {

                await axios.post('/api/missionskill', this.missionskill)

                this.$router.push('/missionskill');

            } catch (error) {
                if (error.response && error.response.status === 422) {
                    if (error.response.data && error.response.data.errors) {
                        this.validationErrors = error.response.data.errors;
                    } else {
                        this.errorMessage = 'Validation failed. Please check the form.';
                    }
                } else {
                    this.errorMessage = 'An error occurred while saving the CMS page.';
                    console.error(error);
                }
            }
        }
    }
}

</script>
<style >
.breadcrumb {
    display: flex;
    justify-content: space-between;
}

#marquee {
    border-radius: 180px;
    background: linear-gradient(to left, #069ce6, #d00288, #f79809);
    box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);
}

.flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-weight: 600;
}

.alert-succsess {
   
    border-color: rgb(2, 36, 2);
    color: rgb(10, 49, 10);
}
</style>
