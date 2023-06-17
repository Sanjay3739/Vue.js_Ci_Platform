<template>
    <div class="container">

        <h3 class=" mt-4">Mission Application </h3>


        <div class="row">

            <div class="col-md-12 d-flex ">
                <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee">
                    Mission-Application
                    <svg width="24" height="24" class="ms-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        clip-rule="evenodd">
                        <path
                            d="M9 23h-5.991c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h18.008c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-6.003v-6h-6.014v6zm13.172-9h-20.302l10.124-8.971 10.178 8.971zm-10.169-13s9.046 7.911 11.672 10.244c.413.367.45.999.083 1.412-.367.413-.996.445-1.412.083-2.421-2.105-10.343-9.063-10.343-9.063s-7.899 6.893-10.327 9.051c-.413.367-1.046.329-1.413-.083-.367-.413-.329-1.045.083-1.412 2.626-2.333 11.657-10.232 11.657-10.232zm.01 7c1.104 0 2 .896 2 2s-.896 2-2 2c-1.105 0-2.001-.896-2.001-2s.896-2 2.001-2zm7.003-5h2.984v5.128l-2.984-2.59v-2.538z" />
                    </svg>
                </marquee>
                <div class="msg">
                    <transition name="slide-fade">
                        <div v-if="successMessage" class="alert alert-success">
                            {{ successMessage }}
                        </div>
                    </transition>

                    <transition name="slide-fade">
                        <div v-if="errorMessage" class="alert alert-danger">
                            {{ errorMessage }}
                        </div>
                    </transition>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                            fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M9 23h-5.991c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h18.008c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-6.003v-6h-6.014v6zm13.172-9h-20.302l10.124-8.971 10.178 8.971zm-10.169-13s9.046 7.911 11.672 10.244c.413.367.45.999.083 1.412-.367.413-.996.445-1.412.083-2.421-2.105-10.343-9.063-10.343-9.063s-7.899 6.893-10.327 9.051c-.413.367-1.046.329-1.413-.083-.367-.413-.329-1.045.083-1.412 2.626-2.333 11.657-10.232 11.657-10.232zm.01 7c1.104 0 2 .896 2 2s-.896 2-2 2c-1.105 0-2.001-.896-2.001-2s.896-2 2.001-2zm7.003-5h2.984v5.128l-2.984-2.59v-2.538z" />
                        </svg>
                    </div>
                    <div class="d-flex justify-content-between m-3">
                        <form class="m-0" enctype="multipart/form-data">
                            <div class="rb">
                                <div class="input-group">
                                    <span class="input-group-text rbc">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="rat" placeholder="search" class="form-control rbc">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover  ">
                            <thead class="thead-light">
                                <tr>
                                    <th> Mission Title</th>
                                    <th>Mission Id </th>
                                    <th> User Id </th>
                                    <th>User Name </th>
                                    <th>Appication Date </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="missionapplication in missionapplications"
                                    :key="missionapplication.mission_application_id">
                                    <td>{{ missionapplication.title }}</td>
                                    <td>{{ missionapplication.mission_id }}</td>
                                    <td>{{ missionapplication.user_id }}</td>
                                    <td>{{ missionapplication.first_name }}</td>
                                    <td>{{ missionapplication.applied_at }}</td>
                                    <td>{{ missionapplication.approval_status }}</td>
                                    <!-- <td :class="getStatusLabel(missionapplication.approval_status)">{{getStatusLabel(missionapplication.approval_status) }}</td> -->
                                    <!-- <td :class="getStatusLabel(missionskill.status)">{{ getStatusLabel(missionskill.status ) }}</td> -->
                                    <td class="fs-20">
                                        <a @click="approveApplication(missionapplication.mission_application_id)">
                                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                stroke-miterlimit="2" height="35" width="35" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path id="green"
                                                    d="m11.998 2.005c5.517 0 9.997 4.48 9.997 9.997 0 5.518-4.48 9.998-9.997 9.998-5.518 0-9.998-4.48-9.998-9.998 0-5.517 4.48-9.997 9.998-9.997zm0 1.5c-4.69 0-8.498 3.807-8.498 8.497s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.497-8.497-8.497zm-5.049 8.886 3.851 3.43c.142.128.321.19.499.19.202 0 .405-.081.552-.242l5.953-6.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-5.453 5.962-3.298-2.938c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557z"
                                                    fill-rule="nonzero" />
                                            </svg></a>
                                        <a @click="declineApplication(missionapplication.mission_application_id)">
                                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                stroke-miterlimit="2" height="35" width="35" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path id="red"
                                                    d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"
                                                    fill-rule="nonzero" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <div class="card-footer">
                                <pagination :total="totalItems" :per-page="perPage" v-model="currentPage" />
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
// import Pagination from '@/Components/Pagination.vue'
import axios from 'axios';
import Sidebar from '../sidebar.vue';
// import Pagination from "./Pagination.vue";

export default {
    data() {

        return {

            missionapplications: [],
            searchQuery: '',
            perPage: 10,
            currentPage: 1,
            totalItems: 0,
            successMessage: '',
            errorMessage: '',


        };


    },
    async created() {
        try {
            const response = await axios.get("/api/missionapplication");
            this.missionapplications = response.data;
            console.log(response);
        }
        catch (error) {
            console.error(error);
        }
    },
    methods: {
        async approveApplication(applicationId) {
            axios
                .put(`/api/missionapplication/${applicationId}/approve`)
                .then(response => {
                    // Set success message
                    this.successMessage = response.data.message;
                    this.errorMessage = ''; // Clear error message if any
                    window.location.reload();
                })
                .catch(error => {
                    // Set error message
                    this.errorMessage = error.response.data.message;
                    this.successMessage = ''; // Clear success message if any
                    console.error(error.response.data);
                });
        },
        async declineApplication(applicationId) {
            axios
                .put(`/api/missionapplication/${applicationId}/decline`)
                .then(response => {
                    // Set success message
                    this.successMessage = response.data.message;
                    this.errorMessage = ''; // Clear error message if any
                    window.location.reload();
                })
                .catch(error => {
                    // Set error message
                    this.errorMessage = error.response.data.message;
                    this.successMessage = ''; // Clear success message if any
                    console.error(error.response.data);
                });
        },

    },

};

</script>
<style scoped>
.slide-fade-enter-active {
    transition: all 0.5s;
}

.slide-fade-leave-active {
    transition: all 0.5s;
}

.slide-fade-enter,
.slide-fade-leave-to {
    opacity: 0;
    transform: translateY(20px);
}

.d-flex{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-weight: 600;
}
.alert-success{
    background-color: rgb(117, 242, 117);
    border-color: rgb(2, 36, 2);
    color: rgb(10, 49, 10);
}

.breadcrumb {
    display: flex;
    justify-content: space-between;
}

#marquee {
    border-radius: 10px !important;
    background: linear-gradient(to right, #069ce6, #d00288, #f79809);
    box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);
}



.card {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}


tr {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
        rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

tr>td {
    padding: 10px !important;
}

tr>th {
    padding-left: 20px;

}

#tf {
    border: none;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
}

#green {
    fill: green;
}

#red {
    fill: red;
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

@media (max-width: 1090px) {
    #sidebarToggle {
        margin-left: 10px !important;
    }
}

@media (max-width: 800px) {
    #marquee {
        width: 200px !important;
    }
}

@media (max-width: 552px) {
    table {
        font-size: 15px;
    }

    svg {
        height: 20px;
        width: 20px;
    }
}
</style>
