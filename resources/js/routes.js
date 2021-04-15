
const ProyectsList = () => import('./components/proyectos/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const ProyectsCreate = () => import('./components/proyectos/Insert.vue' /* webpackChunkName: "resource/js/components/category/add" */)
const ProyectsEdit = () => import('./components/proyectos/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)
const ProyectsListUser = () => import('./components/proyectos/Listuser.vue' /* webpackChunkName: "resource/js/components/category/list" */)
export const routes = [
   
    {
        name: 'ProyectsList',
        path: '/admin',
        component: ProyectsList,
    },
    {
        name: 'proyectoEdit',
        path: '/admin/proiektuak/:id/editatu',
        component: ProyectsEdit,
    },
    {
        name: 'proyectoAdd',
        path: '/admin/proiektuak/gehitu',
        component: ProyectsCreate,
    },
    {
        name: 'ProyectsListUser',
        path: '/user',
        component: ProyectsListUser,
    },
    
]
