<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-1">
                    <h1 class="mt-4">Mission Theme</h1>
                    <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee">
                        Theme-Index
                        <svg width="24" height="24" class="ms-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M9 23h-5.991c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h18.008c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-6.003v-6h-6.014v6zm13.172-9h-20.302l10.124-8.971 10.178 8.971zm-10.169-13s9.046 7.911 11.672 10.244c.413.367.45.999.083 1.412-.367.413-.996.445-1.412.083-2.421-2.105-10.343-9.063-10.343-9.063s-7.899 6.893-10.327 9.051c-.413.367-1.046.329-1.413-.083-.367-.413-.329-1.045.083-1.412 2.626-2.333 11.657-10.232 11.657-10.232zm.01 7c1.104 0 2 .896 2 2s-.896 2-2 2c-1.105 0-2.001-.896-2.001-2s.896-2 2.001-2zm7.003-5h2.984v5.128l-2.984-2.59v-2.538z" />
                        </svg>
                    </marquee>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card" id="card">
                    <div class="card-header"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                            fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M9 23h-5.991c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h2v-1h-2c-.553 0-1.001-.448-1.001-1s.448-1 1.001-1h18.008c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-2.001v1h2.001c.552 0 1 .448 1 1s-.448 1-1 1h-6.003v-6h-6.014v6zm13.172-9h-20.302l10.124-8.971 10.178 8.971zm-10.169-13s9.046 7.911 11.672 10.244c.413.367.45.999.083 1.412-.367.413-.996.445-1.412.083-2.421-2.105-10.343-9.063-10.343-9.063s-7.899 6.893-10.327 9.051c-.413.367-1.046.329-1.413-.083-.367-.413-.329-1.045.083-1.412 2.626-2.333 11.657-10.232 11.657-10.232zm.01 7c1.104 0 2 .896 2 2s-.896 2-2 2c-1.105 0-2.001-.896-2.001-2s.896-2 2.001-2zm7.003-5h2.984v5.128l-2.984-2.59v-2.538z" />
                        </svg>
                    </div>
                    <div class="d-flex justify-content-between m-3">
                        <form enctype="multipart/form-data">
                            <div class="rb">
                                <div class="input-group">
                                    <span class="input-group-text rbc">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="search" placeholder="search" class="form-control rbc">
                                </div>
                            </div>
                        </form>
                        <div class="car ">
                            <a href="#">
                                <router-link to="/missiontheme/create" type="button"
                                    class="btn px-4 text-right btn-outline-warning rounded-pill">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M7 9h10V7H7v2Zm11 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Zm-.5-2h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5V21ZM3 21V3h18v8.7q-.725-.35-1.463-.525T18 11q-.275 0-.513.013t-.487.062V11H7v2h6.1q-.425.425-.787.925T11.675 15H7v2h4.075q-.05.25-.063.488T11 18q0 .825.15 1.538T11.675 21H3Z" />
                                    </svg>
                                </router-link>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table  w-100 table-hover table-bordered text-center  ">
                            <thead class="thead-light">
                                <tr>
                                    <th># </th>
                                    <th>Title</th>
                                    <th>Status </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="missiontheme in missionthemes" :key="missiontheme.mission_theme_id">
                                    <td>{{ missiontheme.mission_theme_id }}</td>
                                    <td>{{ missiontheme.title }}</td>
                                    <td :class="getStatusLabel(missiontheme.status)">{{ getStatusLabel(missiontheme.status)
                                    }}</td>
                                    <td
                                        style="display: flex; flex-direction: row; padding:20px; justify-content: space-evenly;">
                                        <router-link :to="`/missiontheme/${missiontheme.mission_theme_id}`" class=""><svg
                                                width="26" height="26" clip-rule="evenodd" fill-rule="evenodd"
                                                stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="#025091"
                                                    d="m11.998 5c-4.078 0-7.742 3.093-9.853 6.483-.096.159-.145.338-.145.517s.048.358.144.517c2.112 3.39 5.776 6.483 9.854 6.483 4.143 0 7.796-3.09 9.864-6.493.092-.156.138-.332.138-.507s-.046-.351-.138-.507c-2.068-3.403-5.721-6.493-9.864-6.493zm8.413 7c-1.837 2.878-4.897 5.5-8.413 5.5-3.465 0-6.532-2.632-8.404-5.5 1.871-2.868 4.939-5.5 8.404-5.5 3.518 0 6.579 2.624 8.413 5.5zm-8.411-4c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zm0 1.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5z"
                                                    fill-rule="nonzero" />
                                            </svg></router-link>
                                        <router-link :to="`/missiontheme/${missiontheme.mission_theme_id}/edit`"
                                            class=""><img src="Images/edit.png" style="height: 22px; width: 22px;">
                                        </router-link>
                                        <a @click="deletetheme(missiontheme.mission_theme_id)" id="delete">
                                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M9 3h6v-1.75c0-.066-.026-.13-.073-.177-.047-.047-.111-.073-.177-.073h-5.5c-.066 0-.13.026-.177.073-.047.047-.073.111-.073.177v1.75zm11 1h-16v18c0 .552.448 1 1 1h14c.552 0 1-.448 1-1v-18zm-10 3.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5v12c0 .276.224.5.5.5s.5-.224.5-.5v-12zm5 0c0-.276-.224-.5-.5-.5s-.5.224-.5.5v12c0 .276.224.5.5.5s.5-.224.5-.5v-12zm8-4.5v1h-2v18c0 1.105-.895 2-2 2h-14c-1.105 0-2-.895-2-2v-18h-2v-1h7v-2c0-.552.448-1 1-1h6c.552 0 1 .448 1 1v2h7z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
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

export default {
    data() {

        return {

            missionthemes: [],
            searchQuery: '',
        };
    },
    async created() {
        try {
            const response = await axios.get("/api/missiontheme");
            this.missionthemes = response.data;
            console.log(response);
        }
        catch (error) {
            console.error(error);
        }
    },
    methods: {
        async deletetheme(id) {
            try {
                await axios.delete(`/api/missiontheme/${id}`);
                this.missionthemes = this.missionthemes.filter(missiontheme => missiontheme.mission_theme_id !== id);

            } catch (error) {
                console.error(error);
            }
        },
        getStatusLabel(status) {
            return status == 1 ? "Active" : "Inactive";
        },
        search() {

        }
    },
    components: { Sidebar }
}
</script>


<style scoped>
.breadcrumb {

    display: flex;
    justify-content: space-between;
}

.Active {
    color: rgb(58, 195, 58);
}

.Inactive {
    color: red;
}


#marquee {
    border-radius: 10px;
    background: linear-gradient(to right, #069ce6, #d00288, #f79809);
    box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);
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

tr,td {
    margin: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
        rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
td>a{
    margin-top: 10px;
}

/*
.pagination .page-item:first-child .page-link:before {
    content: "«";
    margin-right: 5px;
}


.pagination .page-item:last-child .page-link:after {
    content: "<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m3.378 20c-.76 0-1.378-.608-1.378-1.355 0-.531.315-1.018.843-1.302 1.212-.645 2.614-2.735 2.983-4.286-2.38-.538-3.8-2.394-3.8-4.564 0-2.169 1.859-4.493 4.627-4.493 3.501 0 5.096 2.882 5.096 5.561 0 5.742-6.32 10.439-8.371 10.439zm10.251 0c-.76 0-1.378-.608-1.378-1.355 0-.531.315-1.018.843-1.302 1.212-.645 2.614-2.735 2.983-4.286-2.38-.538-3.8-2.394-3.8-4.564 0-2.169 1.859-4.493 4.627-4.493 3.501 0 5.096 2.882 5.096 5.561 0 5.742-6.32 10.439-8.371 10.439zm-6.21-8.428c.112 3-1.984 5.754-3.649 6.966 1.911-.782 6.479-4.857 6.479-8.977 0-1.869-.942-4.051-3.596-4.051-1.871 0-3.127 1.542-3.127 2.983 0 1.453.862 3.166 3.893 3.079zm10.251 0c.112 3-1.984 5.754-3.649 6.966 1.911-.782 6.479-4.857 6.479-8.977 0-1.869-.942-4.051-3.596-4.051-1.871 0-3.127 1.542-3.127 2.983 0 1.453.862 3.166 3.893 3.079z" fill-rule="nonzero"/></svg>";
    margin-left: 5px;
} */

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

/*
@media (max-width: 992px) {
    #sidebarToggle {
        margin-left: 10px !important;
    }
}

@media (max-width: 800px) {
    #marquee {
        width: 200px !important;
    }
}

@media (max-width: 768px) {
    table {
        font-size: 15px;
    }

    table>tbody>tr>td>a {
        margin-bottom: 5px;
    }

    table>tbody>tr>td>.btn {
        font-size: 10px;
    }

    form>.btn {
        font-size: 10px;
    }

    table>tbody {
        padding: none;
        margin: none;
    }
}

@media (max-width: 445px) {
    span>svg {
        width: 17px;
        height: 17px;
    }

    .rb>.input-group {
        width: 200px;
    }

    .car>a {
        width: 100px;
    }
}

@media (max-width: 389px) {

    .d-flex>.car {
        width: 90px;
    }
} */
</style>


