import axios from 'axios';

const urlBase = 'http://localhost:4000/pokemon';

export default {
    getAllPokemons: (callback) => {
        const url = urlBase + '/all';
        axios.get(url).then((pokemon) => {
            if (callback) {
                callback(pokemon);
            }
        })
    }
}