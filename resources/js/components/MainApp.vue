<template>
    <div class="main">
            <div class="header">
                <router-link to="/dashbord" class="nav-link">
                            Dashboard
                        </router-link>
                    <router-link to="/profile" class="nav-link">
                            profile
                        </router-link>
            </div>
            <div class="container">
                <router-view></router-view>
            </div>
        
    </div>
</template>

<script>
    export default {
        name: 'main-app'
    }
</script>
