;
// asignar un nombre y versión al cache
const CACHE_NAME='v2_cache_redemp',
 urlsToCache=[
'./',
'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
'https://getbootstrap.com/docs/5.2/examples/footers/',
'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css',
'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js',
'./css/asistencia.css',
'./css/carousel.css',
'./css/headers.css',
'./css/index.css',
'./css/modals.css',
'./css/organigrama.css',
'./css/perfil.css',
'./css/precios.css',
'./css/registro.css',
'./css/signin.css',
'./css/sticky-footer-navbar copy.css',
'./css/sticky-footer-navbar.css',
'./script.js',
'./img/ProgramadorFitness.png',
'./img/favicon.png',
'./img/img.jpg',
'./js/index.js',
'./js/pages/cerrarSesion.js',
'./js/pages/descartarRegistro.js',
'./js/pages/iniciarSesion.js',
'./js/pages/registro.js',

]
 

//durante la fase de instalacion , generakmente se almacena un cache los activos estaticos
self.addEventListener('install', e=>{

    e.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache=>{
            return cache.addAll(urlsToCache)
            .then(()=>self.skipWaiting())
        })
        .catch(err=>console.log('Fallo registro de cache',err))
    )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexion

self.addEventListener('activate', e=>{

const cacheWhitelist=[CACHE_NAME]

e.waitUntil(
    caches.keys()
    .then(cacheNames=>{
        cacheNames.map(cacheName=>{
            //eliminamos lo que ya no se necesita en cache
            if(cacheWhitelist.indexOf(cacheName)===-1){
               return caches.delete(cacheName) 
            }
        })
    })
    //le indaca al SW activar el cache actual
    .then(() =>self.clients.claim())
)
})

//cuando el navegador recupera una url

self.addEventListener('fetch', e=>{

//respoder ya sea con el objeto en cache o continuar y buscar la url real

e.respondWith(
    caches.match(e.request)
    .then(res=>{
        if(res){
            //recuperar el cache
            return res
        }
        //recuperar de la peticion a la url
        return fetch(e.request)
    })
)
})