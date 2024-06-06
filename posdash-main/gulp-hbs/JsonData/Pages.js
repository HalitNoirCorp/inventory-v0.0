const layouts = [
  { name: 'Dashboard 1',
    value: 'dashboard-1',
    image: './assets/images/intro/demo/layout/dashboard-1.jpg',
    subTitle: 'Side menu , Reporting Dashboard',
    link: './backend/index.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/index.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/'
      }
    ]
  },
  { name: 'List Product',
    value: 'List Product',
    image: './assets/images/intro/demo/layout/list-product.jpg',
    link: './backend/page-list-product.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/page-list-product.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/listproduct'
      }
    ]
 },
  {
    name: 'Report',
    value: 'Report',
    image: './assets/images/intro/demo/layout/report.jpg',
    subTitle: 'Side menu, Campaigning Dashboard',
    link: './backend/page-report.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/page-report.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/report'
      }
    ]
 },
]

const app = [
  
]

const backend = [
  {
    name: 'User Management',
    value: 'user',
    type: 'app',
    image: './assets/images/intro/demo/layout/app-5.jpg',
    link: './app/user-profile.html',
    links: [
      {
        name: 'HTML',
        link: './app/user-profile.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/user-profile'
      }
    ]
  },
  {
    name: 'User Add',
    value: 'User Add',
    type: 'app',
    image: './assets/images/intro/demo/layout/app-9.jpg',
    link: './app/user-add.html',
    links: [
      {
        name: 'HTML',
        link: './app/user-add.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/user-add'
      }
    ]
  },
  {
    name: 'Register',
    value: 'register',
    type: 'backend',
    image: './assets/images/intro/demo/layout/sign-up.jpg',
    link: './backend/auth-sign-up.html',
    links: [
      {
        name: 'HTML',
        link: './backend/auth-sign-up.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/auth/sign-up'
      }
    ]
  },  
  {
    name: 'Timeline',
    value: 'timeline',
    type: 'backend',
    image: './assets/images/intro/demo/layout/time.jpg',
    link: './backend/timeline.html',
    links: [
      {
        name: 'HTML',
        link: './backend/timeline.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/extra-pages/timeline-1'
      }
    ]
  },
  {
    name: 'Pricing',
    value: 'pricing',
    type: 'backend',
    image: './assets/images/intro/demo/layout/price.jpg',
    link: './backend/pricing-3.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pricing-3.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/extra-pages/pricing-1'
      }
    ]
  },
  {
    name: 'Error 404',
    value: 'error-404',
    type: 'backend',
    image: './assets/images/intro/demo/layout/error-404.jpg',
    link: './backend/pages-error.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-error.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue//pages/error-404'
      }
    ]
  },
  {
    name: 'Error 500',
    value: 'error-500',
    type: 'backend',
    image: './assets/images/intro/demo/layout/error-500.jpg',
    link: './backend/pages-error-500.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-error-500.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/pages/error-500'
      }
    ]
  },
  {
    name: 'Login',
    value: 'Login',
    type: 'backend',
    image: './assets/images/intro/demo/layout/sign-in.jpg',
    link: './backend/auth-sign-in.html',
    links: [
      {
        name: 'HTML',
        link: './backend/auth-sign-in.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/auth/sign-in'
      }
    ]
  }, 
  {
    name: 'Maintenance',
    value: 'maintenance',
    type: 'backend',
    image: './assets/images/intro/demo/layout/maintanance.jpg',
    link: './backend/pages-maintenance.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-maintenance.html'
      },
      {
        name: 'VUE',
        link: 'https://iqonic.design/themes/posdash/vue/pages/pages-maintainance'
      }
    ]
  }
]






const allBackendPages = [
  { value: 'widget', name: 'Widget', type: 'backend', mage: '' },
  { value: 'ui', name: 'Ui Elements', type: 'backend', mage: '' },
  { value: 'plugin', name: 'Plugins', type: 'backend', mage: '' },
  { value: 'form', name: 'Form', type: 'backend', mage: '' },
  { value: 'table', name: 'Table', type: 'backend', mage: '' },
  { value: 'icon', name: 'Icon', type: 'backend', mage: '' },
  { value: 'gallery', name: 'Gallery', type: 'backend', mage: '' },
  { value: 'blog', name: 'Blog', type: 'backend', mage: '' },
  { value: 'chart', name: 'Chart', type: 'backend', mage: '' },
  { value: 'map', name: 'Map', type: 'backend', mage: '' },
  { value: 'auth', name: 'Auth', type: 'backend', mage: '' },
  { value: 'contact', name: 'Contact', type: 'backend', image: '' },
  { value: 'timeline', name: 'Timeline', type: 'backend', image: '' },
  { value: 'pricing', name: 'Pricing', type: 'backend', image: '' },
  { value: 'pages-error', name: 'Error', type: 'backend', image: '' },
  { value: 'pages-invoice', name: 'Invoice', type: 'backend', image: '' },
  { value: 'pages-subscribers', name: 'Subscribers', type: 'backend', image: '' },
  { value: 'pages-faq', name: 'FAQ', type: 'backend', image: '' },
  { value: 'pages-blank-page', name: 'Blank Page', type: 'backend', image: '' },
  { value: 'pages-maintenance', name: 'Maintenance', type: 'backend', image: '' },
  { value: 'pages-comingsoon', name: 'Coming soon', type: 'backend', image: '' },
  { value: 'terms-of-service', name: 'Terms of service', type: 'backend', image: '' },
  { value: 'privacy-policy', name: 'Privacy Policy', type: 'backend', image: '' }
]

module.exports = { layouts, app, backend, allBackendPages }
