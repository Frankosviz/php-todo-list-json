const { createApp } = Vue;

createApp({
    data() {
        return {
            ingredienti: [],
            acquistato: '',
            // ultimoId: 25,
            nuovoIngrediente: '',
            apiUrl: 'data.json',
            ingredienteText: ''
        }
    },
    methods: {
        // Creo la funzione per sbarrare gli ingredienti che sono stati gia ordinati/acquistati
        toggleAcquistato(id) {
            const ingrediente = this.ingredienti.find((el) => {
                return el.id === id;
            })
            console.log(ingrediente);
            if (ingrediente) {
                ingrediente.acquistato = !ingrediente.acquistato;
            }
        },
        removeItem(id) {
            const i = this.ingredienti.findIndex((el) => {
                return el.id === id
            })
            if (i !== -1) { //questo è il controllo per vedere se non è meno1 per eliminarlo con splice
                this.ingredienti.splice(i, 1);
            }
        },
        addIngredienti(){
            const nuovoIngrediente = {
                id: null, 
                text: this.ingredienti.text,
                acquistato: false
            }
            let nextId = 0;
            this.ingredienti.forEach((el)=>{
                if(nextId < el.id){
                    nextId = el.id;
                }
            });
            nuovoIngrediente.id = nextId + 1;
            this.ingredienti.push(nuovoIngrediente);
            this.ingredienti.text = '';
        },
        // con la funzione getData andiamo a prendere i dati da axios, aggiungendo il link di axios nell'HEAD
        getData(){
            axios.get(this.apiUrl).then((res) => {
                this.ingredienti = res.data;
                // console.log(res.data);
            })
        }
        
    },
    created() {
        this.getData();
    }
}).mount('#app')