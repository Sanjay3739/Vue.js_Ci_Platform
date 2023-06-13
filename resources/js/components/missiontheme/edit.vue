<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid px-1">
                    <h1 class="mt-4">Mission Theme</h1>
                    <marquee class="breadcrumb mb-4 p-3 w-25 " id="marquee"
                        style=" background: linear-gradient(to right, #069ce6, #d00288, #f79809);box-shadow: 5px 5px 5px rgba(62, 60, 60, 0.6);">
                        Theme-Update
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-5" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12.255 21.954c-.443.03-.865.046-1.247.046-3.412 0-8.008-1.002-8.008-2.614v-2.04c2.197 1.393 5.513 1.819 8.099 1.778-.146-.64-.161-1.39-.085-1.998h-.006c-3.412 0-8.008-1.001-8.008-2.613v-2.364c2.116 1.341 5.17 1.78 8.008 1.78l.569-.011.403-2.02c-.342.019-.672.031-.973.031-3.425-.001-8.007-1.007-8.007-2.615v-2.371c2.117 1.342 5.17 1.78 8.008 1.78 2.829 0 5.876-.438 7.992-1.78v2.372c0 .871-.391 1.342-1 1.686 1.178 0 2.109.282 3 .707v-7.347c0-3.361-5.965-4.361-9.992-4.361-4.225 0-10.008 1.001-10.008 4.361v15.277c0 3.362 6.209 4.362 10.008 4.362.935 0 2.018-.062 3.119-.205-1.031-.691-1.388-1.134-1.872-1.841zm-1.247-19.954c3.638 0 7.992.909 7.992 2.361 0 1.581-5.104 2.361-7.992 2.361-3.412.001-8.008-.905-8.008-2.361 0-1.584 4.812-2.361 8.008-2.361zm6.992 15h-5l1-5 1.396 1.745c.759-.467 1.647-.745 2.604-.745 2.426 0 4.445 1.729 4.901 4.02l-1.96.398c-.271-1.376-1.486-2.418-2.941-2.418-.483 0-.933.125-1.335.331l1.335 1.669zm5 2h-5l1.335 1.669c-.402.206-.852.331-1.335.331-1.455 0-2.67-1.042-2.941-2.418l-1.96.398c.456 2.291 2.475 4.02 4.901 4.02.957 0 1.845-.278 2.604-.745l1.396 1.745 1-5z" />
                        </svg>
                    </marquee>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4"
                    style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                    <div class="card-header">
                        <h5>Enter Data - {{ missiontheme.mission_theme_id }} </h5>
                    </div>
                    <div class="card-body">
                        <form   @submit.prevent="submitForm">
                            <div class="form-group">
                                <label for="titles" class="form-label">
                                    <h5>Title:</h5>
                                </label>
                                <input type="text" v-model="missiontheme.title" name="title" class="form-control "
                                    id="titles" placeholder="">
                            </div>
                            <div class="py-4 d-flex">
                                <h5>Status: </h5>
                                <select name="status" id="status" v-model="missiontheme.status"
                                    class="ms-2 w-25 form-control" required
                                    style="background-color:lightskyblue; color: #ffff;">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                            <tfoot>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <router-link :to="`/missiontheme`" class="">
                                                <svg clip-rule="evenodd" width="55" height="55" fill-rule="evenodd"
                                                    stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m10.978 14.999v3.251c0 .412-.335.75-.752.75-.188 0-.375-.071-.518-.206-1.775-1.685-4.945-4.692-6.396-6.069-.2-.189-.312-.452-.312-.725 0-.274.112-.536.312-.725 1.451-1.377 4.621-4.385 6.396-6.068.143-.136.33-.207.518-.207.417 0 .752.337.752.75v3.251h9.02c.531 0 1.002.47 1.002 1v3.998c0 .53-.471 1-1.002 1zm-1.5-7.506-4.751 4.507 4.751 4.507v-3.008h10.022v-2.998h-10.022z" />
                                                </svg></router-link>
                                            <button type="submit" class='ms-5 btn btn-outline-warning '> Save</button>
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
        }
    },
    async created() {

        const response = await axios.get(`/api/missiontheme/${this.$route.params.mission_theme_id}`);

        this.missiontheme = response.data;

    },
    methods: {
        async submitForm() {

            try {
                console.log(this.missiontheme);
                await axios.put(`/api/missiontheme/${this.$route.params.mission_theme_id}`, this.missiontheme);


                this.$router.push('/missiontheme');

            } catch (error) {
                console.error(error);
            }
        }
    }
}

</script>
<style scoped>
@import 'https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css';

.breadcrumb {
    display: flex;
    justify-content: space-between;
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
