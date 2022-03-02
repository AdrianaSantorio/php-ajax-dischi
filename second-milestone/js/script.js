console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue ({
    el: '#root',
    data: {
        albums : [],
        search: '',
    },
    methods: {
        searchAlbums() {
            axios.get(`http://localhost/Boolean/esercizi/php-ajax-dischi/php-ajax-dischi/second-milestone/api/data/data.php?search=${this.search}`).then(res => {
                this.albums = res.data;
            }).catch(err => {console.error(err)})
        }
    },
    mounted() {
        this.searchAlbums();
    }
});