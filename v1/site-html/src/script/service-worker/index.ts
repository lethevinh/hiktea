interface Window {
    clients: any;
    skipWaiting: any;
}
const APP: string = 'pwa-demo';
const MANIFEST: string = 'files-manifest.json';
const VERSION: string = '1.0.0';
const DEFAULT = [
    "index.html",
    "app.css",
    "vendor.js",
    "app.js"
];

let cacheID: string = APP + '-' + VERSION;
let cacheEnabled: boolean = true;

self.addEventListener('install', function(event: ExtendableEvent): void {
    let preloadRequest: Request = new Request(MANIFEST);
    event.waitUntil(
        fetch(preloadRequest)
        .then(function(response: Response): Promise < string[] > {
            if (response.ok) {
                // return response.json();
                return Promise.resolve(DEFAULT);
            } else {
                console.log('Notice: No manifest present; presuming dev version.');
                cacheEnabled = false;
                return Promise.resolve([]);
            }
        })
        .then(function(json: string[]): Promise < void > {
            if (Array.isArray(json)) {
                return caches.open(cacheID)
                    .then(function(cache: Cache): Promise < void > {
                        return cache.addAll(json);
                    })
                    .then(self.skipWaiting());
            } else {
                return Promise.reject(new Error('Manifest is not an array'));
            }
        })
    );
});

self.addEventListener('activate', function(event: ExtendableEvent): void {
    event.waitUntil(
        caches.keys()
        .then(function(cacheNames: Array < string > ) {
            return Promise.all(cacheNames.map(function(cacheName: string): Promise < boolean > {
                if (cacheName.startsWith(APP) && cacheName !== cacheID) {
                    return caches.delete(cacheName);
                }
            }));
        })
        .then(() => self.clients.claim())
    );
});

self.addEventListener('fetch', function(event: FetchEvent): void {
    event.respondWith(
        caches.open(cacheID)
        .then(function(cache: Cache): Promise < Response > {
            return cache.match(event.request)
                .then(function(cacheResponse: Response): Promise < Response > | Response {
                    return cacheResponse ||
                        fetch(event.request)
                        .then(function(response: Response): Response {
                            if (cacheEnabled && response.ok) {
                                cache.put(event.request, response.clone());
                            }
                            return response;
                        });
                });
        })
    );
});