import Home from './components/Home.vue';
import Dashbord from './components/Dashbord.vue';
import Profile from './components/Profile.vue';
import Services from './components/Services.vue';
import Users from './components/Users.vue';



export const routes = [
    { 
        path: '/home',
        component: Home
    },
    { 
        path: '/dashbord',
        component: Dashbord 
    },
    { 
        path: '/profile',
        component: Profile 
    },
    { 
        path: '/services',
        component: Services 
    },
    { 
        path: '/users',
        component: Users 
    }
];

