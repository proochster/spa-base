import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';

export default {
    mode: 'history', // Use HTML 5 history API for history 
    routes: [    // Array of routes
        {
            path: '/', // Route to respond
            component: Home, // Vue component to load
            name: 'home' // Add name for easier referencing
        },
        {
            path: '/about',
            component: About,
            name: 'about'
        },
        {
            path: '/contact',
            component: Contact,
            name: 'contact'
        }
    ]
}