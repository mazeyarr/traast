import Home from './components/Home/Home';
import About from './components/About/About';
import Projects from './components/Projects/Projects';
import Works from './components/Works/Works';
import News from './components/News/News';

export const routes = [
  {
    path: '/home',
    component: Home,
    name: 'Home'
  },
  {
    path: '/about',
    component: About,
    name: 'About'
  },
  {
    path: '/projects',
    component: Projects,
    name: 'Projects'
  },
  {
    path: '/works',
    component: Works,
    name: 'Works'
  },
  {
    path: '/news',
    component: News,
    name: 'News'
  },
];