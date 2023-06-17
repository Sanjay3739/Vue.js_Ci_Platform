<template>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger" @click="toggleBodyClass">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <router-view></router-view>
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
                    alt="profile_picture">
                <h3>Anamika Roy</h3>
                <p>Designer</p>
            </div>
            <ul>
                <li>
                    <router-link :to="`/user`" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">User</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/cmspage`">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">CMS Page</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/missionskill`">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Mission Skill</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/missiontheme`">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Mission Theme</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/mission`">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Mission</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/missionapplication`">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Mission Application</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/story`">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Story</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="`/banner`">
                        <span class="icon"><i class="fas fa-yin-yang"></i></span>
                        <span class="item">Banner</span>
                    </router-link>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>



<script>
import Sidebar from './sidebar.vue';

export default {
    name: "App",
    components: { Sidebar },
    methods: {
        toggleBodyClass() {
            document.querySelector("body").classList.toggle("active");
        }
    }
}
</script>
<style>
@import url('https://use.fontawesome.com/releases/v5.8.1/css/all.css');

* {
    list-style: none;
    text-decoration: none !important;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body {
    background: #f5f6fa;
}

ol,
ul {
    padding-left: 0rem !important;
}

.wrapper .sidebar {
    background: rgb(5, 68, 104);
    position: fixed;
    top: 0;
    left: 0;
    width: 235px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
}

.wrapper .sidebar .profile {
    margin-bottom: 30px;
    text-align: center;
}

.wrapper .sidebar .profile img {
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
}

.profile>img {

    /* width: 100%; */
    transition: all .1s ease-in-out;
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}

.profile>img:hover {
    transform: scale(1.5);
}

.wrapper .sidebar .profile h3 {
    color: #ffffff;
    margin: 10px 0 5px;
}

.wrapper .sidebar .profile p {
    color: rgb(206, 240, 253);
    font-size: 14px;
}

.wrapper .sidebar ul li a {
    display: block;
    padding: 13px 30px;
    border-bottom: 1px solid #10558d;
    color: rgb(241, 237, 237);
    font-size: 16px;
    position: relative;
}

.wrapper .sidebar ul li a .icon {
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}



.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active {
    color: #0c7db1;

    background: white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon {
    color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before {
    display: block;
}

.wrapper .section {
    width: calc(100% - 225px);
    margin-left: 225px;
    transition: all 0.5s ease;
}

.wrapper .section .top_navbar {
    background: rgb(7, 105, 185);
    height: 50px;
    display: flex;
    align-items: center;
    padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a {
    font-size: 28px;
    color: #f4fbff;
}

.wrapper .section .top_navbar .hamburger a:hover {
    color: #a2ecff;
}



body.active .wrapper .sidebar {
    left: -225px;
}

body.active .wrapper .section {
    margin-left: 0;
    width: 100%;
}
</style>
