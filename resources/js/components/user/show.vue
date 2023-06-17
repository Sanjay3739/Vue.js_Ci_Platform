<template>
    <div class="container">
        <div class="row mt-5" style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
            <div class="col-lg-12">
                <table class="table mt-4 text-center text-capitalize">
                    <thead class="thead-light">
                        <tr>
                            <th class="text">
                                Data- {{ user.user_id }}
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <table class="table table-striped w-75 ">
                            <tbody>
                                <th>Full Name:</th>
                                <tr>
                                    <td>{{ user.first_name ?? 'Not Availabale😒😒😒' }} </td>
                                </tr>
                                <th>Email:</th>
                                <tr>
                                    <td>{{ user.email ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>
                                <th>Mobile Number </th>
                                <tr>
                                    <td>{{ user.phone_number ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>
                                <th>Status </th>
                                <tr>
                                    <td :class="getStatusLabel(user.status)">{{ getStatusLabel(user.status)

                                    }}

                                    </td>
                                </tr>
                                <th>Department</th>
                                <tr>
                                    <td>{{ user.department ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>
                                <th>Employee Id</th>
                                <tr>
                                    <td>{{ user.employee_id ?? 'Not Availabale😒😒😒' }} </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4" style=" flex-direction:column">
                        <table class="table table-striped w-75 ">
                            <tbody class="text-center">
                                <th>Avatar :<p class="text-success fs-4 "> </p>
                                </th>
                                <tr class=" d-flex justify-content-center">

                                    <td> <img :src="getUserImageUrl(user.avatar)" alt="Volunteer Image"></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4" style=" flex-direction:column">
                        <table class="table table-striped w-75">
                            <tbody>
                                <th>Country Name:</th>
                                <tr>
                                    <td>{{ user.country.name ?? 'Not Availabale😒😒😒' }} </td>
                                </tr>
                                <th>City Name:</th>
                                <tr>
                                    <td>{{ user.city.name ?? 'Not Availabale😒😒😒' }} </td>
                                </tr>
                                <th> Profile Text</th>
                                <tr>
                                    <td>{{ user.profile_text ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>

                                <th>Availability</th>
                                <tr>
                                    <td>{{ user.availability ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>
                                <th>Manager</th>
                                <tr>
                                    <td>{{ user.manager ?? 'Not Availabale😒😒😒' }} </td>
                                </tr>
                                <th>Linkdin Url</th>
                                <tr>
                                    <td>{{ user.linked_in_url ?? 'Not Availabale😒😒😒' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <table>
                <tfoot class="bg-secondary bg-gradient">
                    <tr>
                        <td>
                            <div class="card-body btns text-center ">
                                <router-link to="/user" class="nav-link text-white"
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
</template>

<script>
import axios from 'axios';


export default {
    data() {
        return {
            user: {},
            user_id: '',

        };
    },
    created() {
        console.log('Component created');
        console.log('user_id:', this.$route.params.user_id);
        axios.get(`/api/user/${this.$route.params.user_id}`)
            .then(response => {
                console.log('API response:', response.data);
                this.user = response.data;
            })
            .catch(error => {
                console.error(error);
            });

    },
    methods: {
        getStatusLabel(status) {
            return status === 1 ? 'Active' : 'Inactive';
        },
        getUserImageUrl(avatar) {
            return `/${avatar}`;
        },

    }
};
</script>
<style scoped>
td {
    padding: 15px !important;
}

th {
    padding: 5px;
    font-size: larger;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

tr {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
        rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;

}
</style>

