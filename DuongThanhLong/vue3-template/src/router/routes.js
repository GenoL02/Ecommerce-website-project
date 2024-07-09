export default [
    {
        path: '/',
        name: 'home',
        component: () => import('../views/HomeView.vue')
    },
    {
        path: '/signup',
        name: 'signup',
        component: () => import('../views/SignUpView.vue')
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('../views/LogInView.vue')
    },
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: () => import('../views/ForgotPassView.vue')
    },
    {
        path: '/reset-password',
        name: 'reset-password',
        component: () => import('../views/ResetPassView.vue')
    },
    {
        path: '/detail',
        name: 'detail',
        component: () => import('../views/DetailView.vue')
    },
    {
        path: '/my-store',
        name: 'my-store',
        component: () => import('../views/MyStoreView.vue')
    },
    {
        path: '/info',
        name: 'info',
        component: () => import('../views/ShopInfoView.vue')
    },
    {
        path: '/list',
        name: 'list',
        component: () => import('../views/ProductListView.vue')
    },
    {
        path: '/add-product',
        name: 'add-product',
        component: () => import('../views/AddProductView.vue')
    }
]