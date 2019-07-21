export default {
    mode: 'history', // Use HTML 5 history API for history 
    route: [    // Array of routes
        {
            path: '/',
            components: Home
        },
        {
            path: '/about',
            components: About
        }
    ]
}