console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue ({
    el: '#root',
    data: {
        albums : []
    },
    mounted() {
        axios.get('http://localhost/Boolean/esercizi/php-ajax-dischi/php-ajax-dischi/second-milestone/includes/data/data.php').then(res => {
            this.albums = res.data;
        }).catch(err => {console.error(err)})
    }
});