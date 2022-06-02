import Index from "./component/Index.vue"
import Student from "./component/admin/Student.vue"

const routes = [
    {path: "/", component: Index},
    {path: "/student-information", component: Student}
]

export default routes;