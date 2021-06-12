var CACHE_STATIC_NAME = 'static-v21';
var CACHE_DYNAMIC_NAME = 'dynamic-v21';
var STATIC_FILES = [
    '/offline',
    '/splashscreen',
    '/home',
    '/scripts/plugins/jquery/jquery-3.6.0.min.js'
];

var EXCLUDE_ROUTES = [
  '/',
  '/logout',
];

// function trimCache(cacheName, maxItems) {
//   caches.open(cacheName)
//     .then(function (cache) {
//       return cache.keys()
//         .then(function (keys) {
//           if (keys.length > maxItems) {
//             cache.delete(keys[0])
//               .then(trimCache(cacheName, maxItems));
//           }
//         });
//     })
// }

self.addEventListener('install', function (event) {
  console.log('[Service Worker] Installing Service Worker ...', event);
  self.skipWaiting()
  event.waitUntil(
    caches.open(CACHE_STATIC_NAME)
      .then(function (cache) {
        console.log('[Service Worker] Precaching App Shell');
          cache.addAll(STATIC_FILES);
      })
  )
});

self.addEventListener('activate', function (event) {
  console.log('[Service Worker] Activating Service Worker ....', event);
  event.waitUntil(
    caches.keys()
      .then(function (keyList) {
        return Promise.all(keyList.map(function (key) {
          if (key !== CACHE_STATIC_NAME && key !== CACHE_DYNAMIC_NAME) {
            console.log('[Service Worker] Removing old cache.', key);
            return caches.delete(key);
          }
        }));
      })
  );
  return self.clients.claim();
});

function isInArray(string, array) {
  var cachePath;
  if (string.indexOf(self.origin) === 0) { // request targets domain where we serve the page from (i.e. NOT a CDN)
    // console.log('matched ', string);
    cachePath = string.substring(self.origin.length); // take the part of the URL AFTER the domain (e.g. after localhost:8080)
  } else {
    cachePath = string; // store the full request (for CDNs)
  }
  return array.indexOf(cachePath) > -1;
}

self.addEventListener('fetch', function(event) {

    if (isInArray(event.request.url, STATIC_FILES)) {
        event.respondWith(
          caches.match(event.request)
        );
    } 
    else {
        event.respondWith(
          caches.open(CACHE_DYNAMIC_NAME)
            .then(function (cache) {
              // cache.match(event.request)
              // .then(function (response) {
              //   if(response){
              //     console.log('response');
              //     return response;
              //   }
              //   else{
                  return fetch(event.request)
                  .then(function(res) {
                      if (isInArray(event.request.url, EXCLUDE_ROUTES))
                      {
                      
                      }
                      else
                      {
                        // trimCache(CACHE_DYNAMIC_NAME, 3);
                        cache.put(event.request, res.clone())
                        .catch(function(err) {
                          console.log('Error Put Dynamic Cache: ' + err);
                        });
                      }
                          return res;
                  })
                  .catch(function (err) {

                    return caches.match(event.request)
                    .then(function (response) {
                        if(response){
                          return response;
                        }
                        else{
                          return caches.open(CACHE_STATIC_NAME)
                          .then(function (cache) {
                            if (event.request.headers.get('accept').includes('text/html')) {
                              return cache.match('/offline');
                            }
                          });
                        }
                      })
                      .catch(function (err) {
                        return caches.open(CACHE_STATIC_NAME)
                        .then(function (cache) {
                          if (event.request.headers.get('accept').includes('text/html')) {
                            return cache.match('/offline');
                          }
                        });
                      });
                     

                      
                    });
              //   }
              // })
            })
          );
      }
  });
