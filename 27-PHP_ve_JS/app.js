const app = new Vue({
    el: '#app',
    data: {
        grup_adi: '',
        eklenenler: [
            {id: 1, name: 'ABC'},
            {id: 2, name: 'CBA'},
        ]
    },
    methods: {
        ekle(){
            const formData = new FormData();

            formData.append('groupname', this.grup_adi);

            axios.post('server.php?islem=addgroup', formData)
            .then(res => console.log(res))
            .catch(err => console.log(err));
        }
    }
})