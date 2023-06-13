<template>
    <div class="container w-50">
        <div class="row mt-5" style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
            <div class="col-lg-12">
                <table class="table mt-4 text-center text-capitalize">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <h1> Data- {{ missiontheme.mission_theme_id }} </h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <h5>Title:</h5>
                                    <h5 class="card-title ms-2  text-info"> {{ missiontheme.title }}</h5>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="m-3">
                                <div class="d-flex">
                                    <h5>Status:</h5>
                                    <h5 class="card-title ms-2"  :class="getStatusLabel(missiontheme.status)">{{ getStatusLabel(missiontheme.status)
                                    }}</h5>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-secondary bg-gradient">
                        <tr>
                            <td>
                                <div class="card-body btns text-center ">
                                    <router-link to="/missiontheme" class="nav-link text-white"
                                        style="text-decoration: none; color: white;"><svg class="bi d-block mx-auto mb-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4.5 21q-.625 0-1.063-.438T3 19.5v-1.9l4-3.55V21H4.5ZM8 21v-4h8v4H8Zm9 0v-8.2L12.725 9l3.025-2.675l4.75 4.225q.25.225.375.513t.125.612V19.5q0 .625-.438 1.063T19.5 21H17ZM3 16.25v-4.575q0-.325.125-.625t.375-.5L11 3.9q.2-.2.463-.287T12 3.525q.275 0 .537.088T13 3.9l2 1.775L3 16.25Z" />
                                        </svg>Home</router-link>
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
            missiontheme: {},
            mission_theme_id: '',
            title: '',
        };
    },
    created() {
        console.log('Component created');
        console.log('mission_theme_id:', this.$route.params.mission_theme_id);
        axios.get(`/api/missiontheme/${this.$route.params.mission_theme_id}`)
            .then(response => {
                console.log('API response:', response.data);
                this.missiontheme = response.data;
            })
            .catch(error => {
                console.error(error);
            });
    },
    methods: {
        getStatusLabel(status) {
            return status === 1 ? 'Active' : 'Inactive';
        }
    }
};
</script>
<style scoped>
.Active {
    color: rgb(58, 195, 58);
}

.Inactive {
    color: red;
}
</style>
