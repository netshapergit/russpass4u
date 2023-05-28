const staticAssets = []

const STATIC_CACHE_NAME = 'static-data'
const DYNAMIC_CACHE_NAME = 'dynamic-data'

self.addEventListener('install', async event => {
	const cache = await caches.open(STATIC_CACHE_NAME)
	console.log('install')
	cache.addAll(staticAssets)
})

self.addEventListener('activate', event => {
	console.log('activate')
	return self.clients.claim()
})

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
        return response || fetch(event.request);
    })
  );
});