import './bootstrap';
window.addEventListener('htmx:beforeRequest', (event) => {
    if(event.detail.boosted) {
        console.log(event);
        NProgress.start();
    }
});
window.addEventListener('htmx:afterRequest', (event) => {
    if(event.detail.boosted) {
        console.log("Done")
        console.log(event)
        NProgress.done();
    }
});
